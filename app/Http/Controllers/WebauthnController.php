<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use lbuchs\WebAuthn\Binary\ByteBuffer;
use lbuchs\WebAuthn\WebAuthn;
use lbuchs\WebAuthn\WebAuthnException;

// biometric (WebAuthn / passkey) login for the CMS
class WebauthnController extends Controller
{
    // the relying party id must be the domain the CMS is opened on (https, or localhost in development)
    public function webauthn(){
        return new WebAuthn('Restorasi Kadut CMS', request()->getHost(), null, true);
    }

    public function credentialIds($userId = null){
        return DB::table('webauthn_credentials')
            ->when($userId, function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->pluck('credential_id')
            ->map(function ($id) {
                return ByteBuffer::fromBase64Url($id);
            })
            ->all();
    }

    public function decode($value){
        return ByteBuffer::fromBase64Url($value)->getBinaryString();
    }

    public function registerOptions(){
        $user = DB::table('users')->where('id', session('id'))->first();
        $webauthn = $this->webauthn();
        // platform authenticators only (Touch ID, Face ID, Windows Hello, phone fingerprint), user verification required
        $args = $webauthn->getCreateArgs((string) $user->id, $user->username, $user->name, 60, false, true, false, $this->credentialIds($user->id));
        session(['webauthn_register_challenge' => $webauthn->getChallenge()->getBinaryString()]);
        return response()->json($args);
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'nullable|string|max:60',
            'clientDataJSON' => 'required|string',
            'attestationObject' => 'required|string',
        ]);
        $challenge = session()->pull('webauthn_register_challenge');
        if (!$challenge) {
            return response()->json(['message' => 'Registration expired, please try again.'], 422);
        }

        try {
            $data = $this->webauthn()->processCreate(
                $this->decode($request->clientDataJSON),
                $this->decode($request->attestationObject),
                $challenge,
                true,
                true,
                false
            );
        } catch (WebAuthnException $e) {
            return response()->json(['message' => 'Biometric registration failed: '.$e->getMessage()], 422);
        }

        DB::table('webauthn_credentials')->insert([
            'user_id' => session('id'),
            'name' => $request->name ?: 'Biometric device',
            'credential_id' => rtrim(strtr(base64_encode($data->credentialId), '+/', '-_'), '='),
            'public_key' => $data->credentialPublicKey,
            'sign_count' => (int) $data->signatureCounter,
            'created_at' => Carbon::now('Asia/Jakarta'),
        ]);

        return response()->json(['message' => 'Biometric login registered.']);
    }

    public function destroy($id){
        DB::table('webauthn_credentials')
            ->where('id', $id)
            ->where('user_id', session('id'))
            ->delete();
        return redirect('/cms/settings');
    }

    public function loginOptions(){
        $ids = $this->credentialIds();
        if (!$ids) {
            return response()->json(['message' => 'No biometric login has been registered yet. Log in with your password and register it in Settings.'], 404);
        }
        $webauthn = $this->webauthn();
        $args = $webauthn->getGetArgs($ids, 60, false, false, false, true, true, true);
        session(['webauthn_login_challenge' => $webauthn->getChallenge()->getBinaryString()]);
        return response()->json($args);
    }

    public function login(Request $request){
        $request->validate([
            'id' => 'required|string',
            'clientDataJSON' => 'required|string',
            'authenticatorData' => 'required|string',
            'signature' => 'required|string',
        ]);
        $challenge = session()->pull('webauthn_login_challenge');
        $credential = DB::table('webauthn_credentials')->where('credential_id', $request->id)->first();
        if (!$challenge || !$credential) {
            return response()->json(['message' => 'Biometric login failed, please try again.'], 422);
        }

        $webauthn = $this->webauthn();
        try {
            $webauthn->processGet(
                $this->decode($request->clientDataJSON),
                $this->decode($request->authenticatorData),
                $this->decode($request->signature),
                $credential->public_key,
                $challenge,
                (int) $credential->sign_count,
                true,
                true
            );
        } catch (WebAuthnException $e) {
            return response()->json(['message' => 'Biometric login failed, please try again.'], 422);
        }

        DB::table('webauthn_credentials')->where('id', $credential->id)->update([
            'sign_count' => $webauthn->getSignatureCounter() ?? $credential->sign_count,
            'last_used_at' => Carbon::now('Asia/Jakarta'),
        ]);

        $user = DB::table('users')->where('id', $credential->user_id)->first();
        if (!$user) {
            return response()->json(['message' => 'Biometric login failed, please try again.'], 422);
        }
        session()->regenerate();
        session([
            'id' => $user->id,
            'role_id' => $user->role_id
        ]);
        return response()->json(['redirect' => url('/cms/dashboard')]);
    }
}
