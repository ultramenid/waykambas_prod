@extends('layouts.backend')

@section('content')
    <div class="h-screen flex items-center  px-4">
        <livewire:login-component />
    </div>

    @include('partials.webauthnScript')
    <script>
        if (biometricSupported()) {
            document.getElementById('biometric-login').style.display = 'block';
        }

        async function startBiometricLogin() {
            const message = document.getElementById('biometric-login-message');
            message.textContent = '';
            try {
                await loginBiometric();
            } catch (e) {
                message.textContent = biometricError(e);
            }
        }
    </script>
@endsection
