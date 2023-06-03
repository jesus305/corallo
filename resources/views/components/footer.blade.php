<section class="bg-gray-50">
    <div class="py-24 bg-blueGray-100 rounded-t-10xl">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-4">

          <div class="w-full md:w-1/2 lg:w-3/5 px-4 mb-10 md:mb-0">
            <div class="grid grid-cols-[1fr,3fr] gap-2">
              <div class="flex justify-end"  >
                <a class="block font-bold text-xl mb-14" href="#">
                  <img class="h-16" src="{{ asset('logo/r6.png') }}" alt="">
                </a>
              </div>
              <div >
                <h2 class="text-4xl xl:text-4xl  mb-8 text-gray-500 ml-3">Suscríbase Ahora</h2>
              </div>
            </div>
            
            <div class="mb-5">
              <input
                class="w-full xl:w-auto mb-2 xl:mb-0 xl:mr-2 py-3 px-8 bg-blueGray-100 placeholder-gray-700 border-2 border-red-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                type="email" placeholder="Ingresa tu Correo">
              <button
                class="inline-block py-3 px-10 md:mx-auto w-full xl:w-auto text-xl leading-7 text-white font-medium tracking-tighter font-heading bg-red-400 hover:bg-red-200 focus:ring-2 focus:ring-RED-900 focus:ring-opacity-50 rounded-xl"
                type="button">Suscribir</button>
            </div>
            <p class="text-sm leading-9 text-gray-400">"Suscríbete para mantenerte informado sobre las nuevas colecciones y novedades".</p>
          </div>
          <div class="w-full md:w-1/2 lg:w-2/5 px-4">
            <div class="flex flex-wrap -mx-4">
              {{--------------------------------  Contacto --}}
              <div class="w-full sm:w-2/2 lg:w-2/4 px-4 mb-10 lg:mb-0">
                <h3 class="font-bold text-xl mb-10 text-gray-500">Contacto </h3>
                <ul class="text-gray-600">
                  <li class="mb-5"><a class="text-darkBlueGray-400 hover:text-darkBlueGray-500" href="https://wa.me/573044177551?text=Hola!"><i class="fab fa-whatsapp  fa-1x  text-teal-500 rounded-full " aria-hidden="true "> </i> +57 304 4177551</a>
                  </li>
                  <li class="mb-5"><a class="text-darkBlueGray-400 hover:text-darkBlueGray-500" href="#"><b>PBX:</b> 5 283386</a>
                  </li>
                  
                </ul>
              </div>
               {{--------------------------------  Quienes somos --}}
              {{-- <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-10 lg:mb-0">
                <h3 class="font-bold text-xl mb-10 text-gray-500">Quienes somos </h3>
                <ul class="text-gray-600">
                  <li class="mb-5"><a class="text-darkBlueGray-400 hover:text-darkBlueGray-500" href="#">Cultura
                      </a></li>
                  <li class="mb-5"><a class="text-darkBlueGray-400 hover:text-darkBlueGray-500" href="#">Trabaja aquí
                      </a></li>
                  <li class="mb-5"><a class="text-darkBlueGray-400 hover:text-darkBlueGray-500" href="#">La vida en Corallo </a>
                  </li>
                </ul>
              </div> --}}
              {{--------------------------------  redes sociales --}}
              <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-10 md:mb-0">
                <h3 class="font-bold text-xl mb-10 text-gray-500">Síguenos </h3>
                <div class="flex items-center justify-center">
                  <a href="https://www.facebook.com/corallogroup?mibextid=ZbWKwL" class="mr-4"><i class="fab fa-facebook-square  fa-1x text-white bg-red-400 rounded-full p-3" aria-hidden="true "></i></a>
                  <a href="https://instagram.com/corallobasic?igshid=NTc4MTIwNjQ2YQ==" class="mr-4"><i class="fab fa-instagram fa-1x text-white bg-red-400 rounded-full p-3" aria-hidden="true"></i></a>
                  <a href="https://www.tiktok.com/@corallobasic?_t=8cCikEELtkE&_r=1"><i class="fab fa-tiktok fa-1x text-white bg-red-400 rounded-full p-3" aria-hidden="true"></i></a>
                {{--------------------------------fin  redes sociales --}} 
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white py-8">
      <div class="flex flex-wrap items-center justify-between">
        <div class="w-full md:w-auto px-4 mt-10 md:mt-0 order-last md:order-first">
          <p class="font-medium tracking-widest text-sm text-gray-400">© COPYRIGHT {{ date('Y') }} CORALLO ROSSO. TODOS LOS DERECHOS RESERVADOS. </p>
        </div>
      </div>
    </div>
  </section>