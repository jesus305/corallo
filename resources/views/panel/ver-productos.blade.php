<x-app-layout>
    @include('layouts.navigation-productos')


    <div class="md:flex md:justify-center">
        <img src="{{ asset('storage/banner/' . $coleccion->banner) }}" alt="2">
    </div>



    {{-- --------|-BOTON DE REGISTRAR CATEGORIA ------- --}}
    <livewire:boton-categoria :coleccion="$coleccion" />




    <div class="flex flex-no-wrap">
        <!-- Sidebar starts -->
        <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->

        <livewire:ver-categoria :coleccion="$coleccion" />
        <!-- Sidebar ends -->
        <!-- Remove class [ h-64 ] when adding a card block -->
        <div class="container mx-auto py-10 gap-x-3 md:w-4/5 w-11/12 px-6">
            <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
            <div class="w-full h-full rounded   border-gray-300 lg:max-w-9xl lg:px-8">
                <div class="  mt-0 grid grid-cols-2 gap-y-4 gap-x-3 sm:grid-cols-2 lg:grid-cols-4  xl:gap-x-4">
                    {{-- //////////////////////////////// inicio //////////////////////// --}}
                    @foreach ($productos as $producto)
                    <div class="group  relative">
                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-100">
                            @foreach ($imgs as $img)
                                @if ($img->producto_id == $producto->id && $img->publicado == 0)
                                   <img  src="{{ asset('storage/productos/' . $img->img1) }}" alt="{{ $img->img1 }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                @endif
                           @endforeach        
                        </div>
                        <div class="mt-2 flex justify-center ">
                            <div class="text-center">
                                <h3 class="text-sm text-gray-700">
                                    @if(isset($img))
                                        <a class="font-bol text-lowercase capitalize" href="{{route('producto-detail',['producto'=>$producto,'img'=>$img ])  }}">
                                            <span aria-hidden="true" class="absolute inset-0 "></span>
                                            {{$producto->nombre}}
                                        </a>
                                    @else
                                        <a class="font-bol capitalize" href="#">
                                            <span aria-hidden="true" class="absolute inset-0 "></span>
                                            {{$producto->nombre}}
                                        </a>
                                    @endif
                                </h3>
                                <p class="mt-1 text-sm text-gray-500 font-bold">$ {{ number_format($producto->precio_final, 0, '.', '.')}}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">{{-- (lateral derecho usando justify-between )--}}</p>
                        </div>
                    </div>
                    @endforeach
                    {{-- --------------------------------fin---------------------------------------}}
                </div>
            </div>
        </div>
    </div>












</x-app-layout>