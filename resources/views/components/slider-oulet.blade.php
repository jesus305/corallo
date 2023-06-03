<div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,

    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
        1100: {
        slidesPerView: 5,
        spaceBetween: 0,
      },
      
    },
  })" class="relative w-full mx-auto max-w-full overflow-x-hidden">

    <div class="absolute inset-y-0 left-0 z-10 flex items-center">
      {{-- <button
        class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
        <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
          <path fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </button> --}}
      <div @click="swiper.slidePrev()" class="swiper-button-prev"></div>
    </div>

    <div class="swiper-container" x-ref="container">
      <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach ($productos as $producto)
        <div class="swiper-slide p-4" id="swiper-slide">
            <div class="group relative " > 
                <div class=" min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-sm  group-hover:opacity-75 lg:aspect-none lg:h-100">
                    @foreach ($imgs as $img)
                        @if ($img->producto_id == $producto->id && $img->publicado == 0)
                        <img  src="{{ asset('storage/productos/' . $img->img1) }}" alt="{{ $img->img1 }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full" >
                        @endif
                    @endforeach  
                </div>
                <div class="mt-2 flex justify-center ">
                    <div class="text-center">
                        <h3 class="text-sm text-gray-700">
                            <a class="font-bol" href="{{route('producto-detail',['producto'=>$producto,'img'=>$img ])  }}">
                                <span aria-hidden="true" class="absolute inset-0 "></span>
                              {{$producto->nombre}}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 font-bold">$ {{ number_format(
                            100000, 0, '.', '.')}}</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">
                     </p>
                </div>
            </div>
        </div>
    @endforeach
      </div>
    </div>

    <div class="absolute inset-y-0 right-0 z-10 flex items-center">
      {{-- <button @click="swiper.slideNext()"
        class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
        <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
          <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </button> --}}
      <div @click="swiper.slideNext()" class="swiper-button-next"></div>
    </div>
  </div>