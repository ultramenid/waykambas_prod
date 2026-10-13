@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')
    <main class="h-screen ">
        <div class="max-w-6xl px-6 mx-auto ">
            <div class="sm:pt-8 pt-4 ">
                <div class="grid grid-cols-12 ">
                    <ul class=" sm:space-y-3  space-y-0 sm:space-x-0 mb-6 space-x-3 sm:col-span-2 col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                        @include('partials.sidebarSettings')
                    </ul>
                    <div class="sm:col-span-10 col-span-12 space-y-1">
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded">
                            <h1 class="text-2xl font-semibold px-6 py-6 text-newbg-newgray-900 dark:text-gray-300">Theme preferences </h1>
                            <p class="px-6 mb-6 text-sm font-light text-newbg-newgray-900 dark:text-gray-300">
                                Choose how Dashboard looks to you. Light theme , Dark theme , or sync with your system and automatically.
                            </p>
                            <div class="px-6 py-6 grid grid-cols-1 lg:grid-cols-3 gap-y-6 ">
                                <div class="text-center">
                                    <button onclick="toSystemMode()" class="relative border-gray-200 dark:border-opacity-20 border rounded">
                                        <img src="{{asset('img/system.png')}}" alt="" class=" rounded w-full md:w-53">
                                    </button>
                                    <p class="text-sm font-light dark:text-gray-300 text-newbg-newgray-900">System Theme</p>
                                </div>
                                <div class="text-center">
                                    <button onclick="toDarkMode()" class="relative border-gray-200 dark:border-opacity-20 border rounded">
                                        <img src="{{asset('img/dark_preview.svg')}}" alt="" class=" rounded w-full md:w-53">
                                    </button>
                                    <p class="text-sm font-light dark:text-gray-300 text-newbg-newgray-900">Dark Theme</p>
                                </div>
                                <div class="text-center">
                                    <button onclick="toLightMode()" class="relative border-gray-200 dark:border-opacity-20 border rounded">
                                        <img src="{{asset('img/light_preview.svg')}}" alt="" class=" rounded w-full md:w-53">
                                    </button>
                                    <p class=" text-sm font-light dark:text-gray-300 text-newbg-newgray-900">Light Theme</p>
                                </div>

                            </div>
                        </div>

                        {{-- biometric login --}}
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded mt-6">
                            <h1 class="text-2xl font-semibold px-6 py-6 text-newbg-newgray-900 dark:text-gray-300">Biometric login</h1>
                            <p class="px-6 mb-6 text-sm font-light text-newbg-newgray-900 dark:text-gray-300">
                                Log in to the CMS with Touch ID, Face ID, Windows Hello or your phone's fingerprint instead of typing your password. Register each device you use.
                            </p>

                            <div class="px-6 mb-6">
                                @forelse ($credentials as $credential)
                                    <div class="flex justify-between items-center py-3 border-t border-gray-300 dark:border-opacity-20 text-sm dark:text-gray-300">
                                        <div>
                                            <p class="font-semibold">{{ $credential->name }}</p>
                                            <p class="text-xs text-gray-500">
                                                Added {{ \Carbon\Carbon::parse($credential->created_at)->format('d M Y') }}
                                                · Last used {{ $credential->last_used_at ? \Carbon\Carbon::parse($credential->last_used_at)->format('d M Y H:i') : 'never' }}
                                            </p>
                                        </div>
                                        <form method="POST" action="{{ url('/cms/webauthn/'.$credential->id) }}" onsubmit="return confirm('Remove biometric login for this device?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-xs text-red-500">Remove</button>
                                        </form>
                                    </div>
                                @empty
                                    <p class="text-sm text-gray-500 py-3 border-t border-gray-300 dark:border-opacity-20">No device registered yet.</p>
                                @endforelse
                            </div>

                            <div id="biometric-register" class="px-6 pb-6" style="display: none">
                                <div class="flex sm:flex-row flex-col gap-2">
                                    <input id="biometric-name" type="text" maxlength="60" placeholder="Device name, e.g. MacBook Basuki" class="flex-1 appearance-none border rounded py-2 px-4 text-sm text-gray-700 leading-tight focus:outline-none">
                                    <button type="button" onclick="startBiometricRegister()" class="inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-gray-900 text-sm font-medium text-white hover:bg-white hover:text-black hover:border-black transition ease-in-out duration-150">
                                        Register this device
                                    </button>
                                </div>
                                <p id="biometric-register-message" class="text-xs mt-2"></p>
                            </div>
                            <p id="biometric-unsupported" class="px-6 pb-6 text-xs text-red-500" style="display: none">
                                This browser cannot use biometric login here. It needs HTTPS (or localhost) and a device with Touch ID, Face ID, Windows Hello or a fingerprint sensor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.webauthnScript')
    <script>
        document.getElementById(biometricSupported() ? 'biometric-register' : 'biometric-unsupported').style.display = 'block';

        async function startBiometricRegister() {
            const message = document.getElementById('biometric-register-message');
            message.className = 'text-xs mt-2';
            message.textContent = 'Follow the prompt on your device...';
            try {
                await registerBiometric(document.getElementById('biometric-name').value);
                window.location.reload();
            } catch (e) {
                message.className = 'text-xs mt-2 text-red-500';
                message.textContent = biometricError(e);
            }
        }
    </script>
@endsection
