{{-- <---------------Carrusel header-----------> --}}
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative">
                <img class="hidden md:block w-full opacity-80" src="{{ asset('banner/pasa2.webp') }}" alt="Imagen 1">
                <img class="block md:hidden w-full opacity-80" src="{{ asset('banner/pasa1.webp') }}" alt="Imagen 1">
                <div class="absolute inset-0 flex items-center justify-center"
                    style="text-shadow: 10px 10px 15px black;">
                    <a href="{{'/cliente/producto-detail/28/52'}}">
                        <p class="text-white text-2xl font-semibold mt-20 p-4 border-4 border-white">COMPRAR AHORA</p>
                    </a>
                </div>
            </div>



            <div class="swiper-slide relative">
                <img class="hidden md:block w-full opacity-80" src="{{ asset('banner/medi1.webp') }}" alt="Imagen 2">
                <img class="block md:hidden w-full opacity-80" src="{{ asset('banner/medi2.webp') }}" alt="Imagen 2">
                <div class="absolute inset-0 flex items-center justify-center"
                    style="text-shadow: 10px 10px 15px black;">
                    <a href="{{'/cliente/producto-detail/38/52'}}">
                        <p class="text-white text-2xl font-semibold mt-20 p-4 border-4 border-white">COMPRAR AHORA</p>
                    </a>
                </div>
            </div>




            <div class="swiper-slide relative">
                <img class="hidden md:block w-full opacity-80" src="{{ asset('banner/restaurante1.webp') }}" alt="Imagen 3">
                <img class="block md:hidden w-full opacity-80" src="{{ asset('banner/restaurante2.webp') }}" alt="Imagen 3">
                <div class="absolute inset-0 flex items-center justify-center"
                    style="text-shadow: 10px 10px 15px black;">
                    <a href="{{'/cliente/producto-detail/38/52'}}">
                        <p class="text-white text-2xl font-semibold mt-20 p-4 border-4 border-white">COMPRAR AHORA</p>
                    </a>
                </div>
            </div>



        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <script>
        var mySwiper = new Swiper('.swiper-container', {
          // Opciones de Swiper:
          loop: true,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          autoplay: {
          delay: 5000,
            },
        });
    </script>