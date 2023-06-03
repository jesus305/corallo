<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Corallo Rosso S.A.S') }}
        </h2>
    </x-slot>
    --}}

    @include('layouts.navigation')



    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('crear-tienda')}}"><button type="button"
                    class="font-bold hover:bg-red-600 px-6 py-2.5  text-white  text-xs  uppercase rounded-full  flex items-center bg-red-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="3 0 24 26" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Nueva Tienda
                </button></a>
        </div>
    </div>

    <div class="mb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('mensaje'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-1 mb-2 shadow-md mb-"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold"> {{ session ('mensaje')}}</p>
                        {{-- <p class="text-sm">Text</p> --}}
                    </div>
                </div>
            </div>
            @endif

            <livewire:mostrar-tiendas />
        </div>
    </div>



</x-app-layout>