<script>
    // biometric (WebAuthn / passkey) helpers, binary values travel as base64url
    function b64urlToBuffer(value) {
        const base64 = value.replace(/-/g, '+').replace(/_/g, '/');
        const padded = base64 + '='.repeat((4 - base64.length % 4) % 4);
        return Uint8Array.from(atob(padded), c => c.charCodeAt(0)).buffer;
    }

    function bufferToB64url(buffer) {
        let binary = '';
        new Uint8Array(buffer).forEach(b => binary += String.fromCharCode(b));
        return btoa(binary).replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/, '');
    }

    function biometricSupported() {
        return window.isSecureContext && !!window.PublicKeyCredential;
    }

    function biometricError(e) {
        if (e.name === 'NotAllowedError') return 'Biometric was cancelled or timed out.';
        if (e.name === 'InvalidStateError') return 'This device is already registered.';
        if (e.name === 'SecurityError') return 'Biometric login needs HTTPS (or localhost).';
        return e.message || 'Something went wrong, please try again.';
    }

    async function webauthnPost(url, body) {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify(body || {}),
        });
        const data = await response.json().catch(() => ({}));
        if (!response.ok) {
            throw new Error(data.message || 'Something went wrong, please try again.');
        }
        return data;
    }

    async function registerBiometric(name) {
        const args = await webauthnPost("{{ url('/cms/webauthn/register/options') }}");
        args.publicKey.challenge = b64urlToBuffer(args.publicKey.challenge);
        args.publicKey.user.id = b64urlToBuffer(args.publicKey.user.id);
        (args.publicKey.excludeCredentials || []).forEach(c => c.id = b64urlToBuffer(c.id));

        const credential = await navigator.credentials.create(args);
        return webauthnPost("{{ url('/cms/webauthn/register') }}", {
            name: name,
            clientDataJSON: bufferToB64url(credential.response.clientDataJSON),
            attestationObject: bufferToB64url(credential.response.attestationObject),
        });
    }

    async function loginBiometric() {
        const args = await webauthnPost("{{ url('/cms/webauthn/login/options') }}");
        args.publicKey.challenge = b64urlToBuffer(args.publicKey.challenge);
        (args.publicKey.allowCredentials || []).forEach(c => c.id = b64urlToBuffer(c.id));

        const credential = await navigator.credentials.get(args);
        const data = await webauthnPost("{{ url('/cms/webauthn/login') }}", {
            id: bufferToB64url(credential.rawId),
            clientDataJSON: bufferToB64url(credential.response.clientDataJSON),
            authenticatorData: bufferToB64url(credential.response.authenticatorData),
            signature: bufferToB64url(credential.response.signature),
        });
        window.location.href = data.redirect;
    }
</script>
