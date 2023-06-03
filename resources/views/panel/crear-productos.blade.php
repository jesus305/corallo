<x-app-layout>
  @include('layouts.navigation')

  <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 mt-3">
          <h1 class="text-2xl font-bold text-center mb-10"> Agregar Productos </h1>
          @if (session()->has('mensaje'))
          <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-1 mb-2 shadow-md mb-" role="alert">
              <div class="flex">
              <div class="py-1">
                  <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                  </svg>
              </div>
                <div>
                  <p class="font-bold"> {{ session ('mensaje')}}</p>
                  {{-- <p class="text-sm">Text</p> --}}
                </div>
              </div>
            </div>
          @endif
          <div class="md:flex md:justify-center p-5">
            <livewire:crear-productos
             :coleccion="$coleccion" 
             :subcategoria="$subcategoria"
             :subcategorys="$subcategorys"
             :categorys="$categorys"
              />
          </div>
          


          <div class="bg-white">
            <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
              <h2 class="text-2xl font-bold tracking-tight text-gray-900">Listados de {{$subcategoria->nombre}}</h2>
              @if($productos->count())
              <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                {{-- <<<----------------´roductos de la subcategoria--------------->>>>>>> --}}
                  @foreach ($productos as $producto)
                  <div class="group relative ">
                    <div  {{-- {{ asset('storage/banner/' . $coleccion->banner)  public/productos/ }} --}}
                      class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                      @foreach ($imgs as $img)
                            @if  ($img->producto_id == $producto->id)
                                <img style="width:700px; height: 1025;" src="{{ asset('storage/productos/' . $img->img1) }}"
                                alt="{{ $img->producto_id }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                {{-- @else
                                <img style="width:700px; height: 1025;" src="{{ asset('storage/fondo-pro/fondo-pro.png') }}"
                                alt="{{ $img->producto_id }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full"> --}}
                            @endif
                     @endforeach
              
                    </div>

                    <div class="mt-2 flex justify-center">
                      <div class="text-center">
                        <h3 class="text-sm text-gray-700">
                          <a class="font-bol capitalize" href="{{route ('crear-detail',$producto->id) }}" target="_self">
                            <span aria-hidden="true" class="absolute inset-0 "></span>
                            {{$producto->nombre}} <hr>REF:. <label class="font-bold text-red-400" id="myElement">{{$producto->codigo_referencia}} </label> 
                          </a>
                          <button id="copyButton" data-clipboard-target="#myElement">
                            <i class="fas fa-copy"></i> 
                          </button>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 font-bold">$ {{number_format( $producto->precio_final, 0, '.', '.')}}</p>
                      </div>
                      <p class="text-sm font-medium text-gray-900">{{-- (lateral derecho usando justify-between )
                        --}}</p>
                    </div>
                  </div>
                  @endforeach

                  @else
                  <h2 class=" text-4xl text-center font-black my-5">No hay registro de {{$subcategoria->nombre}}</h2>

                  @endif
                  <!-- More products... -->
              </div>
            </div>
          </div>

    

        </div>
      </div>
    </div>
  </div>

<script>
 var copyButton = document.getElementById("copyButton");
copyButton.addEventListener("click", function() {
  var target = document.querySelector(copyButton.getAttribute('data-clipboard-target'));
  var text = target.innerText;
  navigator.clipboard.writeText(text).then(function() {
    console.log('Texto copiado al portapapeles');
    // Abre la nueva ventana aquí
    window.open('https://www.ejemplo.com');
  }, function() {
    console.error('Error al copiar el texto');
  });
});

  </script>



</x-app-layout>