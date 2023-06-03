<div style="min-height: 716px" class="w-64 absolute sm:relative   md:h-full flex-col justify-between hidden sm:flex">
    <div class="px-8">
        <ul class="mt-6">
            {{---------------------------------nombre de categoria---------------------------- --}}
            @foreach ($categorias as $categoria )
            <a href="{{route('crear-subca',$categoria->id ) }}">
                <div class="flex">
                    <h1 class="font-bold text-3xl mt-3 ml-0 capitalize ">{{$categoria->nombre}}</h1>
                   {{--  icono de boton + --}}
                    <x-agregar-subcategoria />
                </div>
            </a>
            <ul class="ml-3 text-sm mt-2">

                @foreach ($subcategorias as $subcategoria)
                @if ($subcategoria->categoria_id == $categoria->id )
                {{----------------------------- nombre de sub categoria --}}
                <li class="capitalize"><a href="{{route('crear-productos',[$subcategoria->id,$coleccion,$subcategoria->nombre,$categoria->nombre]) }}">{{$subcategoria->nombre}}
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
                                <label>({{ $max_contador }})</label>
                                @endif <b class="">+</b></a> </li>
                @endif
                @endforeach
                </ul>
            @endforeach
        </ul>
    </div>
</div>