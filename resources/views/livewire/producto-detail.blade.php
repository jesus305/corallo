<div class="flex flex-wrap -mx-4">
  {{-- <-----------------------menu de migas de pan----------------------------------------------> --}}
    <div class="w-full px-4">
      <ul class="flex flex-wrap mb-2 items-center">
        <li class="mr-5">
          <a class="inline-block mr-5 text-xs font-bold font-heading uppercase text-gray-300"
            href="{{ url('/') }}">HOME</a>
          <span class="inline-block">
            <svg width="6" height="11" viewbox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0.131073 0.755835C-0.0436907 0.581885 -0.0436907 0.302414 0.131073 0.129744C0.305837 -0.0429273 0.588197 -0.0435662 0.76296 0.129744L5.86893 5.18707C6.04369 5.35975 6.04369 5.63922 5.86893 5.81317L0.762959 10.8705C0.588196 11.0432 0.305836 11.0432 0.131072 10.8705C-0.0436916 10.6972 -0.0436916 10.4171 0.131072 10.2444L4.78774 5.4998L0.131073 0.755835Z"
                fill="#151515"></path>
            </svg>
          </span>
        </li>
        <li class="mr-5">
          <a wire:click.prevent onclick="goBack()"
            class="inline-block mr-5 text-xs font-bold font-heading uppercase text-gray-300" href="#">atrás</a>
          <span class="inline-block">
            <svg width="6" height="11" viewbox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0.131073 0.755835C-0.0436907 0.581885 -0.0436907 0.302414 0.131073 0.129744C0.305837 -0.0429273 0.588197 -0.0435662 0.76296 0.129744L5.86893 5.18707C6.04369 5.35975 6.04369 5.63922 5.86893 5.81317L0.762959 10.8705C0.588196 11.0432 0.305836 11.0432 0.131072 10.8705C-0.0436916 10.6972 -0.0436916 10.4171 0.131072 10.2444L4.78774 5.4998L0.131073 0.755835Z"
                fill="#151515"></path>
            </svg>
          </span>
        </li>
        <li><a class="inline-block text-xs font-bold font-heading uppercase text-gray-300" href="#">
            {{$producto->nombre}}</a></li>
      </ul>
    </div>
    <div>

    </div>

    {{-- <--------------------------componete lv-----------------------------------> --}}
      <div class="md:flex md:justify-center p-5">
        @foreach ($imgcolores as $imgcolor)
        <div class="imagenPrincipal w-full md:w-1/2 px-4 mb-2 md:mb-0">
          {{----------------------------img 1--------------------------> --}}
          <div class="relative h-128 mb-8">
            <img class="object-cover w-full h-full" id="img_principal"
              src="{{ asset('storage/productos/' . $imgcolor->img1) }}"
              alt="{{ asset('storage/productos/' . $imgcolor->img1) }}">
          </div>

          {{-- If cuando tengo 3 img --}}
          @if($imgcolor->img3 != '' && $imgcolor->img4 == '' )
          <div class="hidden md:flex  -mx-4 mb-8">
            {{------------------------img 2--------------------------> --}}
            <div class="w-1/2 px-4">
              <img class="w-full" src="{{ asset('storage/productos/' . $imgcolor->img2) }}"
                alt="{{ asset('storage/productos/' . $imgcolor->img2) }}">
            </div>
            {{------------------------img 3--------------------------> --}}
            <div class="w-1/2 px-4">
              <img class="w-full" src="{{ asset('storage/productos/' . $imgcolor->img3) }}"
                alt="{{ asset('storage/productos/' . $imgcolor->img3) }}">
            </div>
          </div>
          {{-- if cuadno tengo 2 img --}}
          @elseif ($imgcolor->img3 == '' && $imgcolor->img4 == '' )
          {{---------------------------img 4--------------------------> --}}
          <div class="hidden md:block mb-12" style="height: 564px;">
            <img class="object-cover w-full h-full" src="{{ asset('storage/productos/' . $imgcolor->img2) }}"
              alt="{{ asset('storage/productos/' . $imgcolor->img2) }}">
          </div>
          @else
          {{-- cuando tengo las 4 --}}
          <div class="hidden md:flex  -mx-4 mb-8">
            {{------------------------img 2--------------------------> --}}
            <div class="w-1/2 px-4">
              <img class="w-full" src="{{ asset('storage/productos/' . $imgcolor->img2) }}"
                alt="{{ asset('storage/productos/' . $imgcolor->img2) }}">
            </div>
            {{------------------------img 3--------------------------> --}}
            <div class="w-1/2 px-4">
              <img class="w-full" src="{{ asset('storage/productos/' . $imgcolor->img3) }}"
                alt="{{ asset('storage/productos/' . $imgcolor->img3) }}">
            </div>
          </div>
          {{---------------------------img 4--------------------------> --}}
          <div class="hidden md:block mb-12" style="height: 564px;">
            <img class="object-cover w-full h-full" src="{{ asset('storage/productos/' . $imgcolor->img4) }}"
              alt="{{ asset('storage/productos/' . $imgcolor->img4) }}">
          </div>

          @endif

        </div>
        @endforeach
        <div class="w-full md:w-1/2 px-4 ">
          <div class="mb-10 pb-10 border-b">
            <div class="flex items-center justify-between">
              <span class="text-gray-500 uppercase">Ref.: {{$producto->codigo_referencia}}</span>
              <div>
                {{-- //////////---------Corazon me gusta------///////////////// --}}
                <div>
                  <button>
                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6">
                        <path
                          d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                      </svg></div>
                    {{-- <div> <span class="text-gray-500">Cantidad de megusta</span></div> --}}
                  </button>
                </div>
              </div>
            </div>
            <h3 class="mt-2 mb-6 max-w-xl text-5l md:text-2xl font-bold font-heading capitalize">
              {{$producto_id ->nombre}} </h3>
            <p class="inline-block mb-8 text-2xl font-bold font-heading text-blue-300">
              <span>$ {{ number_format( $producto->precio_final, 0, '.', '.')}}</span>
              <span class="font-normal text-base text-gray-400 line-through">
              </span>
            </p>
           {{--  <p class="max-w text-gray-500">{{$producto->descripcion_modelo}}</p> --}}
          </div>


          {{--------------------------colores------------------------------------}}
          <span class="font-bold font-heading text-gray-400 uppercase">Elegir Color: </span>

          <form wire:submit.prevent='cargarArticulo' enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap -mx-2 -mb-2 space-x-2">
              @foreach ($seleccions as $seleccion )
              @if ($seleccion->producto_id == $producto->id )
              <div class="w-16">
                <input wire:model="colorNuevo" type="radio" id="{{$seleccion->id}}" name="color"
                  value="{{$seleccion->id}}" class="hidden peer" required>
                <label for="{{$seleccion->id}}"
                  class=" inline-flex justify-between items-center  text-gray-500 border bg-white rounded-lg   cursor-pointer dark:hover:text-gray-300 dark:border-gray-100 dark:peer-checked:text-blue-500
                                                peer-checked:border-green-600   peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400  ">
                  <img style="border: 1px solid #ffffff;   margin-top: 1px; margin-bottom: 1px"
                    class="w-full rounded-lg bg-image" src="{{ asset('storage/productos/' . $seleccion->color) }}"
                    alt="{{$seleccion->nombre}}">
                </label>
              </div>
              @endif
              @endforeach
            </div>





            {{-- <<<<<<<<-----------tallas--------->>> --}}
              <div class="mb-12 mt-5">
                <span class="block font-bold font-heading text-gray-400 uppercase">Elegir Talla: </span>
                <div class=" flex flex-wrap -mx-2 -mb-2">
                  @foreach ($tallas as $talla)
                  @if ($talla->imgcolor_id == $imgcolor->id )
                  <div class="w-1/3 sm:w-1/5 p-2">
                    <input wire:model="SeleccionTalla" type="radio" id="{{$talla->id}}" name="talla"
                      value="{{$talla->id}}" class=" hidden peer" required>
                    <label for="{{$talla->id}}"
                      class="uppercase  inline-flex justify-center items-center p-4 w-full text-gray-500 border bg-white rounded-lg  font-bold cursor-pointer dark:hover:text-gray-300 dark:border-gray-200 dark:peer-checked:text-blue-500
                                      peer-checked:border-green-600   peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-600  ">
                      {{$talla->talla}}
                    </label>
                    @error('talla')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>

              {{-- <x-button class="block mt-0 w-full  px-2 mb-4 lg:mb-0 justify-center ">
                Agregar al Carrito
              </x-button> --}}
              <div class="w-full">
                <div class="w-full mx-auto">
                  {{-- BOTON PARA AGREGAR AL CARITO --}}
                  {{-- <x-button type="submit"
                    class="block mt-2 w-full px-2 mb-4 lg:mb-0 justify-center hover:bg-red-300 bg-red-400">
                    <span class="mr-2"><i class="fas fa-cart-plus"></i></span>
                    Agregar al carrito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </x-button> --}}
                  {{-- BOTON PARA PAGO CONTRA ENTREGA --}}
                 



                </div>
              </div>

          </form>
          <a href="https://wa.me/573044177551/?text=Hola%20estoy%20interesad@%20en%20la%20referencia%20{{$producto->codigo_referencia}}%20y%20pago%20contra%20entrega">
            <x-button
              class="block mt-2 w-full px-2 mb-4 lg:mb-0 justify-center btn-destacado hover:bg-gray-400 bg-gray-600">
             {{--  <span class="mr-2"><i class="fas fa-home"></i></span> --}} {{-- esconder por ahora cuANDO SE termine la pagina--}}
             <span class="mr-2"><i class="fab fa-whatsapp"></i></span>  {{-- quitar en la version 1.1 --}}
             Contra entrega ir al Chat&nbsp;&nbsp;&nbsp;
            </x-button>
          </a>
          {{-- BOTON PARA WHATSAPP --}}
          <a href="https://wa.me/573044177551/?text=Hola%20estoy%20interesado%20en%20la%20referencia%20{{$producto->codigo_referencia}}">
            <button
              class="block mt-2 w-full px-2 mb-4 lg:mb-0 justify-center hover:bg-green-300 bg-green-500 items-center py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
              <span class="mr-2"><i class="fab fa-whatsapp"></i></span>
              Comprar por WhatsApp
            </button>
          </a>


          {{-- desplegables de producto detail --}}
          {{-- <x-desplegableDetail>
            <x-slot name="titulo">
              Título del detalle desplegable
            </x-slot>
            <x-slot name="contenido">
              Contenido del detalle desplegable
            </x-slot>
          </x-desplegableDetail>
 --}}
{{-- 
          <table class="table-auto">
            <thead>
              <tr>
                <th class="px-4 py-2"><b>ID</b></th>
                <th class="px-4 py-2">talla</th>
                <th class="px-4 py-2">color</th>
              </tr>
            </thead>
            @php
            $valores = array_column($productos, 'SeleccionTalla');
            $total = array_sum($valores);
            @endphp
            @foreach($productos as $producto)
            <tbody>

              <tr>
                <td class="border px-4 py-2"> 0</td>
                <td class="border px-4 py-2">{{ $producto['colorNuevo'] }}</td>
                <td class="border px-4 py-2">{{ $producto['SeleccionTalla'] }}</td>
              </tr>

              @php
              $total += floatval($producto['SeleccionTalla']); // Sumar el valor del producto al total
              @endphp
              @endforeach

            </tbody>
          </table>
          <tr>
            <td colspan="2" class="text-right font-bold">Total:</td>
            <td class="border px-4 py-2">{{ $total }}</td>
          </tr> --}}



        </div>
      </div>
</div>