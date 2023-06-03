




<div style="min-height: 716px" class="w-64 absolute sm:relative   md:h-full flex-col justify-between hidden sm:flex">
    <div class="px-8">
        <ul class="mt-6">
            {{---------------------------------nombre de categoria---------------------------- --}}
               @foreach ($categorys as $category)
                <div class="flex">
                    <h1 class="font-bold text-3xl mt-3 ml-0 capitalize ">{{$category->nombre}}</h1>
                </div>
                <ul class="ml-3 text-sm mt-2">
                        @foreach ($subcategorias as $subcategoria)
                            @if ($subcategoria->categoria_nombre == $category->nombre )
                                <li class="capitalize">
                                        @php
                                            $max_contador = 0;
                                            $contador =0;
                                        @endphp
                                        @foreach ($productos as $producto)
                                            @if ($producto->subcategoria_id == $subcategoria->id )
                                                @php
                                                    $contador++;
                                                @endphp
                                                    @if ($contador > $max_contador)
                                                        @php
                                                            $max_contador = $contador;
                                                        @endphp
                                                    @endif
                                            @endif
                                        @endforeach
                                                @if ($max_contador > 0)
                                                    <a href="{{route('ver-articulo',['category'=>$subcategoria->categoria_nombre, 'subcategory'=>$subcategoria->nombre  ] )}}">{{$subcategoria->nombre}}<label>({{ $max_contador }})</label> </a>
                                                @endif
                                                
                                </li> 
                            @endif                   
                        @endforeach
                </ul>
                @endforeach
        </ul>
    </div>
</div>




<div class="container mx-auto py-10 gap-x-3 md:w-4/5 w-11/12 px-6">
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
                    <p class="text-sm font-medium text-gray-900">  </p>
                </div>
            </div>
            @endforeach
            {{----------------------------------fin---------------------------------------}}
        </div>
    </div>
</div>

