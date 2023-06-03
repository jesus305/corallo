<x-app-layout>
  
     {{-- menu y menu responsive --}}
  <x-menu-home class="mt-0" />



  {{-- Header --}}
  <x-carousel class="mt-0" />


 {{--  nueva coleccion --}}
 <div class="w-full mt-6 mb-2 flex justify-center">
  <h1 class="text-4xl  items-center">Nueva Colección</h1>
</div>

  <x-slider-colection class="mt-0" />


  <div class="w-full mt-6 mb-2">
    <h1 class=" text-center text-4xl  capitalize"> Categorías </h1>
  </div>
     {{-- menu  en cuadros --}}
  <x-menu-cuadros class="mt-0" />



  
 
    {{-- Oulter Slider --}}
  <div class="w-full mb-2 ">
    <h1 class="text-center text-4xl drop-shadow-md"> Outlet </h1>
  </div>
  <x-slider-oulet class="mt-0" />
  

   {{--  pie de pagina --}}
  <x-footer class="mt-0" />


  

</x-app-layout>