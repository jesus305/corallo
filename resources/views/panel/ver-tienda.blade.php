<x-app-layout>
    @include('layouts.navigation')
   {{--  <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Corallo Rosso S.A.S') }}
        </h2>
    </x-slot>
 --}}



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

            <a wire:click="({{ $tienda->id }})" href="{{route ('crear-coleccion', $tienda->id)}}"> <button type="button"
                    class="mb-5 font-bold hover:bg-red-600 px-6 py-2.5  text-white  text-xs  uppercase rounded-full  flex items-center bg-red-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="3 0 24 26" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Crear Nueva Coleccíon
                </button></a>

               



                <div >
                    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-8">
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Mis Colecciones</h2>
                        @if($coleccion->count())
                        <div class="mt-6 grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" >
                        @foreach ($coleccion as $coleccion )
                                <div class="group relative">
                                    <div  class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200 group-hover:opacity-100 lg:aspect-none lg:h-80">
                                     <img src="{{ asset('storage/portadaimg/' . $coleccion->portadaimg) }}" 
                                            alt="{{$coleccion->portadaimg}}"
                                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                    </div>
                                    <div class="mt-4 flex justify-between">
                                        <div>
                                            <h3 class="text-sm text-gray-700">
                                                <a href="{{route('ver-productos', $coleccion->id)}}">
                                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                                    {{-- Basic Tee --}}
                                                </a>
                                            </h3>
                                        {{--   <p class="mt-1 text-sm text-gray-500">Black</p> --}}
                                        </div>
                                        {{-- <p class="text-sm font-medium text-gray-900">$35</p> --}}
                                    </div>
                                </div>
                        @endforeach
                            
                            <!-- More products... -->
                        </div>
                        @else
                        <h2 class=" text-4xl text-center font-black my-5">No hay Publicaciones</h2>
                        
                        @endif
                            <!-- More products... -->
                  
                    </div>
                </div>


            

        </div>
    </div>





    {{-- -----------------------------------datos de la
    tienda----------------------------------------------------------- --}}
    <div class="mb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <h1 class="text-4xl font-bold text-center mb-1"> {{$tienda->nombre }} </h1>
                    <div class="p-10">
                        <div class="mb-5">
                            <h3 class="font-bold text-3xl text-gray-800">
                                Datos de la Tienda
                            </h3>
                            <div class="md:grid md:grid-cols-2 p-4 my-0 mr-4">
                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Nombre de Tienda <br>
                                    <span class="normal-case font-normal"> {{$tienda->nombre }} </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Nit <br>
                                    <span class="normal-case font-normal"> {{$tienda->nit }} </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Lema <br>
                                    <span class="normal-case font-normal"> {{$tienda->lema }} </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Descripcíon <br>
                                    <span class="normal-case font-normal"> {{$tienda->descripcion }} </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Telefono <br>
                                    <span class="normal-case font-normal"> {{$tienda->telefono }} </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Correo <br>
                                    <span class="normal-case font-normal"> {{$tienda->correo }} </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Dirección <br>
                                    <span class="normal-case font-normal"> {{$tienda->direccion }} </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Departamento <br>
                                    <span class="normal-case font-normal"> {{$tienda->departamentos }} </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Municipio <br>
                                    <span class="normal-case font-normal"> {{$tienda->municipios }} </span>
                                </p>

                                {{-- ------------------- estado de activacion de la Tienda on/off
                                --------------------------------- --}}
                                @if ($tienda->publicado == 1 )
                                {{-- ------------------------- estado inactivo ----------------------------------- --}}
                                <p class="font-bold text-sm uppercase text-gray-500 my-3">Estado <br>
                                    <span class="uppercase  font-bold text-red-500 "> En Proceso de verificacíon </span>
                                </p>
                                @else
                                {{-- ------------------------- estado activo ----------------------------------- --}}
                                <p class="font-bold text-sm  text-gray-800 my-3">Estado <br>
                                    <span class="uppercase  font-bold text-green-500"> Activo </span>
                                </p>
                                @endif

                            </div>
                            {{-- ------------------- imagenes del banner --------------------------------- --}}
                            <div class="text-gray-500 gap-4">
                                <h4 class="text-2xl font-bold mb-5">Logo de la Tienda </h4>
                                <div class="md:flex md:justify-center">
                                    <img style="width: 512px" src="{{ asset('storage/logotiendas/' . $tienda->logo) }}"
                                        alt="{{$tienda->logo}}">
                                </div>
                            </div>
                            {{-- ------------------- imagenes del LOGO --------------------------------- --}}
                            <div class="text-gray-500 gap-4">
                                <h3 class="text-2xl font-bold mb-5">Banner de la Tienda </h2>
                                    <div class="md:flex md:justify-center">
                                        <img src="{{ asset('storage/banner/' . $tienda->banner) }}"
                                            alt="{{$tienda->banner}}">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</x-app-layout>







