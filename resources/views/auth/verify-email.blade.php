<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que enviamos?   Si no recibiste el correo, con gusto te enviaremos otro.

            ') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro..') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Reenviar enlace de verificacion') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class=" text-sm text-gray-600 hover:text-gray-900 font-bold">
                    {{ __('Cerrar Sesión') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
