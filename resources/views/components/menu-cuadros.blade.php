<section class="py-10 lg:py-5">
  <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
  <div class="w-full h-full rounded   border-gray-300 lg:max-w-9xl lg:px-8">
    <div class="  mt-0 grid grid-cols-2 gap-y-4 gap-x-3 sm:grid-cols-2 lg:grid-cols-5  xl:gap-x-5">
      {{-- //////////////////////////////// inicio //////////////////////// --}}
      <div class="group  relative">
        <div
          class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200  lg:aspect-none lg:h-100">
          <img src="{{ asset('storage/categorias/blusas.webp') }}"
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
            <div class="rounded-sm p-4 " >
              <h3 class="text-3xl font-bold text-white" style="text-shadow:   10px 10px 15px black;">Blusas</h3>
            </div>
            
          </div>
        </div>
        <div class="mt-2 flex justify-center ">
          <div class="text-center">
            <h3 class="text-sm text-gray-700">
              <a class="font-bold capitalize " href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'blusas'] )}}">
                <span aria-hidden="true" class="absolute inset-0 "></span>
              </a>
            </h3>
          </div>
          <p class="text-sm font-medium text-gray-900">{{-- (lateral derecho usando justify-between )--}}</p>
        </div>
      </div>

     {{--  <div class="group  relative">
        <div
          class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200  lg:aspect-none lg:h-100">
          <img src="https://www.studiof.com.co/arquivos/VESTIDOS-FEB-TROPICAL.png?v=638131092388400000"
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
            <div class="rounded-sm p-4 " style="">
              <h3 class="text-3xl font-bold text-white" style="text-shadow:   10px 10px 15px black;">Blusones</h3>
            </div>

          </div>
        </div>
        <div class="mt-2 flex justify-center ">
          <div class="text-center">
            <h3 class="text-sm text-gray-700">
              <a class="font-bold capitalize" href="https://pinkrose.com.co/collections/descuentos">
                <span aria-hidden="true" class="absolute inset-0 "></span>
              </a>
            </h3>
          </div>
          <p class="text-sm font-medium text-gray-900">  </p>
        </div>
      </div> --}}
      
      <div class="group  relative">
        <div
          class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200  lg:aspect-none lg:h-100">
          <img src="{{ asset('storage/categorias/conjuntos.webp') }}"
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
            <div class="rounded-sm p-4 " style="">
              <h3 class="text-3xl font-bold text-white" style="text-shadow:   10px 10px 15px black;">Conjuntos</h3>
            </div>
          </div>
        </div>
        <div class="mt-2 flex justify-center ">
          <div class="text-center">
            <h3 class="text-sm text-gray-700">
              <a class="font-bold capitalize" href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'conjuntos'] )}}">
                <span aria-hidden="true" class="absolute inset-0 "></span>
              </a>
            </h3>
          </div>
          <p class="text-sm font-medium text-gray-900">{{-- (lateral derecho usando justify-between )--}}</p>
        </div>
      </div>

      <div class="group  relative">
        <div
          class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200  lg:aspect-none lg:h-100">
          <img src="{{ asset('storage/categorias/enterizo.webp') }}"
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
            <div class="rounded-sm p-4 " >
              <h3 class="text-3xl font-bold text-white" style="text-shadow:   10px 10px 15px black;">Enterizos</h3>
            </div>

          </div>
        </div>
        <div class="mt-2 flex justify-center ">
          <div class="text-center">
            <h3 class="text-sm text-gray-700">
              <a class="font-bold capitalize" href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'enterizos'] )  }}">
                <span aria-hidden="true" class="absolute inset-0 "></span>
              </a>
            </h3>
          </div>
          <p class="text-sm font-medium text-gray-900">{{-- (lateral derecho usando justify-between )--}}</p>
        </div>
      </div>




      <div class="group  relative">
        <div
          class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200  lg:aspect-none lg:h-100">
          <img src="{{ asset('storage/categorias/falda.webp') }}"
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
            <div class="rounded-sm p-4 " style="">
              <h3 class="text-3xl font-bold text-white" style="text-shadow:   10px 10px 15px black;">Faldas</h3>
            </div>

          </div>
        </div>
        <div class="mt-2 flex justify-center ">
          <div class="text-center">
            <h3 class="text-sm text-gray-700">
              <a class="font-bold capitalize" href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'faldas'] )  }}">
                <span aria-hidden="true" class="absolute inset-0 "></span>
              </a>
            </h3>
          </div>
          <p class="text-sm font-medium text-gray-900">{{-- (lateral derecho usando justify-between )--}}</p>
        </div>
      </div>





      <div class="group  relative" id="myDiv">
        <div
          class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm bg-gray-200  lg:aspect-none lg:h-100">
          <img src="{{ asset('storage/categorias/vestido.webp') }}"
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
            <div class="rounded-sm p-4 " >
              <h3 class="text-3xl font-bold text-white" style="text-shadow:   10px 10px 15px black;">vestidos</h3>
            </div>

          </div>
        </div>
        <div class="mt-2 flex justify-center ">
          <div class="text-center">
            <h3 class="text-sm text-gray-700">
              <a class="font-bold capitalize" href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'vestidos'] )  }}">
                <span aria-hidden="true" class="absolute inset-0 "></span>
              </a>
            </h3>
          </div>
          <p class="text-sm font-medium text-gray-900">{{-- (lateral derecho usando justify-between )--}}</p>
        </div>
      </div>


      
      {{-- --------------------------------fin---------------------------------------}}
    </div>
  </div>

</section>

<script>
 const myDiv = document.getElementById("myDiv");

myDiv.addEventListener("click", () => {
  myDiv.classList.toggle("clicked");
});

</script>