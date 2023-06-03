<!-- Menu -->
@if (Route::has('login'))
<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
  <a href="{{ url('/') }}" class="flex  ">
    <img src="{{ asset('logo/r6.png') }}" class="  h-10 sm:w-16 sm:h-9 md:w-28 md:h-9 lg:w-36 lg:h-10 object-contain"
      alt="{{ asset('logo/r6.png') }}">
    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black hidden md:inline-block">Corallo
      Rosso</span>
  </a>
  <div class="lg:hidden" >
    <div class="flex items-center w-full" >
      <div class="relative mr-4"  >
        <form method="GET" action="{{ route('buscar') }}" >
          @csrf
          <input type="text" id="palabraclave" name="palabraclave" value="{{old('palabraclave')}}" placeholder="Buscar"
            class="w-50 appearance-none rounded-full border-1 border-red-500 bg-white p-2 px-4 focus:bg-white focus:ring-2 focus:ring-red-500" />
          <button type="submit" class="absolute top-0 right-0 mt-2 mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 22" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </button>
        </form>
      </div>
      
      <button class="navbar-burger flex items-center text-red-500 p-3">
        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Mobile menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
    </div>
    
    
  </div>
  
  <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2  lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
    {{-- <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Home g</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-blue-600 font-bold" href="#">About U ss</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li> --}}
    <li>
      <div class="relative">
        <form method="GET"  action="{{ route('buscar') }}">
          @csrf
          <input type="text" id="palabraclave" name="palabraclave" value="{{old('palabraclave')}}"  placeholder="Buscar"
            class="w-50 appearance-none rounded-full border-1 border-red-500 bg-white p-2 px-4 focus:bg-white focus:ring-2 focus:ring-red-500 " />
          <button type="submit" class="absolute top-0 right-0 mt-2 mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 22" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </button>
        </form>
      </div>
    </li>
    @error('palabraclave')
    <livewire:mostrar-alerta :message="$message" />  
    @enderror
  </ul>
 
{{-- 
  <a href="#"
    class="hidden border-r border-gray-300 lg:inline-block lg:ml-auto lg:mr-1 py-2 px-1 text-xxs text-gray-600   transition duration-200 ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6 inline-block mr-0">
      <path stroke-linecap="round" stroke-linejoin="round"
        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
    </svg>
    Carrito
  </a>


  <a href="#"
    class="hidden border-r border-gray-300 lg:inline-block  py-2 px-1 text-xxs text-gray-600   transition duration-200 ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6 inline-block mr-0">
      <path stroke-linecap="round" stroke-linejoin="round"
        d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
    </svg>
    Rastrear Pedido
  </a>

  @auth
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="#" class="hidden lg:inline-block  py-2 px-2   text-xxs text-gray-600   transition duration-200"
      :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6 inline-block mr-0">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
      </svg>
      Cerrar
    </a>
  </form>
  @else
  <a class="hidden lg:inline-block  py-2 px-2   text-xxs text-gray-600   transition duration-200"
    href="{{ route('login') }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6 inline-block mr-0">
      <path stroke-linecap="round" stroke-linejoin="round"  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
    </svg>
    Iniciar Sesión
  </a> --}}
  {{-- @if (Route::has('register'))
  <a class="hidden lg:inline-block py-2 px-6 bg-red-400 hover:bg-red-300 text-sm text-white font-bold rounded-xl transition duration-200"
    href="{{ route('register') }}">Crear Cuenta</a>--}}

  {{-- @endauth
 --}}

</nav>
<div class="navbar-menu relative z-50 hidden">
  <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
  <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-full max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
    <div class="flex items-center mb-8">
      <a class="mr-auto text-3xl font-bold leading-none" href="{{ url('/') }}">
          <img src="{{ asset('logo/r6.png') }}" class="  h-10 sm:w-16 sm:h-9 md:w-28 md:h-9 lg:w-36 lg:h-10 object-contain"
            alt="{{ asset('logo/r6.png') }}">
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black hidden md:inline-block">Corallo
            Rosso</span>
      </a>
      <button class="navbar-close">
        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div>
      <ul>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
            href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'todo']) }}">Ver Todo  <b>+</b></a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
            href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'blusas'] )}}">Blusas</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
            href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'conjuntos'] )}}">Conjuntos</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
            href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'enterizos'] )  }}">Enterizos</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
            href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'blusones'])}}">Blusones</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
            href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'vestidos'])}}">Vestidos</a>
        </li>
      </ul>
    </div>
    <div class="mt-auto">
     {{--  ----------------------------------------------------- CODIGO PARA INICIAR SESION -------------------------- --}}
     {{--  <div class="pt-6">
        <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold  bg-gray-50 hover:bg-gray-100 rounded-xl"
          href="#">Sign in</a>
        <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl"
          href="#">Sign Up</a>
      </div> --}}
      <p class="my-4 text-xs text-center text-gray-400">
        <span>Copyright © {{ date('Y') }}</span>
      </p>
    </div>
  </nav>
</div>
@endif



<div class="flex  justify-center items-center text-gray-900 border-t bg-gray-100 menu ">
  <a href="#" class="mx-7 text-gray-700 my-1 uppercase text-xs font-semibold">Novedades</a>
  <div class="relative inline-block text-left mx-7 my-1">
    <div>
      <button type="button"
        class="inline-flex justify-center items-center text-gray-700 uppercase text-xs font-semibold"
        id="ropa-menu-button" aria-expanded="false" aria-haspopup="true">
        Ropa
        <svg class="w-3 h-3 ml-1 fill-current" viewBox="0 0 12 12">
          <path
            d="M2.293 4.293a1 1 0 0 1 1.414 0L6 6.586l2.293-2.293a1 1 0 1 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z" />
        </svg>
      </button>
    </div>
    <div
      class="absolute z-50 hidden w-70 py-1 bg-white rounded-sm shadow-lg mt-2 ml-2 border-l-2 border-gray-300 capitalize"
      aria-labelledby="ropa-menu-button" id="ropa-menu">

      <a href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'todo']) }}"
        class=" ml-4 mt-4 text-gray-700 text-xs font-semibold hover:bg-gray-100 flex items-center ">
        <span>Ver todo</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="2 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-3 h-3 fill-current font-bold ml-1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
      </a>
      <a href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'blusas'] )}}"
        class="block px-4 py-4 text-gray-700 text-xs font-semibold hover:bg-gray-100">Blusas </a>
      <a href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'conjuntos'] )}}"
        class="block px-4 py-4 text-gray-700 text-xs font-semibold hover:bg-gray-100">Conjuntos </a>
      <a href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'enterizos'] )  }}"
        class="block px-4 py-4 text-gray-700 text-xs font-semibold hover:bg-gray-100">enterizos</a>
      <a href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'blusones'])}}"
        class="block px-4 py-4 text-gray-700 text-xs font-semibold hover:bg-gray-100">blusones</a>
      <a href="{{route('ver-articulo',['category'=>'ropa', 'subcategory'=>'vestidos'])}}"
          class="block px-4 py-4 text-gray-700 text-xs font-semibold hover:bg-gray-100">vestidos</a>  


    </div>
  </div>
  <a href="#" class="mx-7 text-gray-700 my-1 uppercase text-xs font-semibold">Básicos</a>
  <a href="#" class="mx-7 text-gray-700 my-1 uppercase text-xs font-semibold">Ubicacion</a>
</div>



<script>
  document.addEventListener("DOMContentLoaded", function() {
    var ropaMenuButton = document.getElementById("ropa-menu-button");
    var ropaMenu = document.getElementById("ropa-menu");

    ropaMenuButton.addEventListener("click", function(event) {
      var expanded = this.getAttribute("aria-expanded") === "true" || false;
      this.setAttribute("aria-expanded", !expanded);
      ropaMenu.classList.toggle("hidden");
      event.stopPropagation(); // evitar que se cierre inmediatamente después de abrirse
    });

    document.addEventListener("click", function(event) {
      if (!ropaMenu.contains(event.target)) {
        ropaMenu.classList.add("hidden");
        ropaMenuButton.setAttribute("aria-expanded", "false");
      }
    });
  });
</script>





<script>
  // Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>