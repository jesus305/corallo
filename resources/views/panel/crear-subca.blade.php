<x-app-layout>
    @include('layouts.navigation')

    <div class="py-6">
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


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <h1 class="text-2xl font-bold text-center mb-10"> Crear SubCategoría </h1>

                    <div class="md:flex md:justify-center p-5">
                        <livewire:crear-subcategoria :categoria="$categoria" />
                    </div>

                </div>
            </div>

            <div class="w-full">
                <h2 class="text-lg font-medium mb-4 mt-2 "><b>SubCategoría</b></h2>
                @if($subcategorialists->count())
                <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                    @foreach ($subcategorialists as $subcategorialist )
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">
                            <span class="ml-2 flex-1 w-0 truncate">{{$subcategorialist->nombre}}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @else
                <h2 class=" text-4xl text-center font-black my-5">No hay Publicaciones</h2>

                @endif
            </div>


        </div>
    </div>
</x-app-layout>