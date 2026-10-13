<div class="mx-auto  rounded border w-96 bg-white shadow-sm">
    <form wire:submit.prevent="login">
        @csrf
        <h1 class="text-center mt-6 mb-16 text-2xl font-bold text-gray-900"> Login Page </h1>
        <div class="px-6  mb-4">
            <label for="formName" class="block text-gray-700 text-sm font-semibold mb-2">Username:</label>
            <input type="text" autofocus class="appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autofocus wire:model.defer="username" wire:keydown.enter='login'>
            @error('username') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
        </div>
        <div class="px-6  mb-4">
            <label for="formName" class="block text-gray-700 text-sm font-semibold mb-2">Password:</label>
            <input type="password" class=" appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model.defer="password" wire:keydown.enter='login'>
            @error('password') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
        </div>
        <div class="px-6 mb-2">
            @if (session()->has('message'))
            <span class="text-red-500 text-xs">{{ session('message') }}</span>
            @endif
        </div>
        <div class="px-6 mb-4 text-right">
            <button wire:loading.remove wire:click="login" type="button" class=" inline-flex justify-center  sm:w-1/4 w-full rounded-md border border-transparent px-4 py-2 bg-gray-900 text-base leading-6 font-medium text-white shadow-sm hover:bg-white hover:text-black hover:border-black transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                Login
            </button>
            {{-- loading --}}
            <button wire:loading wire:target='login' type="button" class=" inline-flex justify-center  sm:w-1/4 w-full rounded-md border border-transparent px-4 py-2 bg-gray-900 text-base leading-6 font-medium text-white shadow-sm transition ease-in-out duration-150 sm:text-sm sm:leading-5 cursor-not-allowed">
                <svg class="animate-spin mx-auto h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>

            {{-- biometric login, shown only when the browser supports it --}}
            <div wire:ignore id="biometric-login" class="mt-4 pt-4 border-t text-center" style="display: none">
                <button type="button" onclick="startBiometricLogin()" class="inline-flex items-center justify-center gap-2 w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm font-medium text-gray-900 hover:border-black transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                    Login with biometric
                </button>
                <p id="biometric-login-message" class="text-red-500 text-xs mt-2"></p>
            </div>

            <p class="text-xs text-center mt-4 "><a data-turbolinks="false"  href="{{ url('/') }}" >Continue to site. . </a></p>
        </div>


    </form>
</div>
