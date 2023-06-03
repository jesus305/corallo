<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? Escribe tu dirección de correo electrónico y te enviaremos un enlace de restablecimiento de contraseña.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="flex justify-between mt-4">
                <x-link :href="route('login')">
                   Iniciar Sesion
                </x-link>
                
                <x-link :href="route('register')">
                    Crear Cuenta
                </x-link>
            </div>

            <div class="flex   mt-4">
                <x-button class="w-full justify-center">
                    {{ __('Enviar enlace') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
