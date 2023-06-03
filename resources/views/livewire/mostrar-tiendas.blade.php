
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
   
    @foreach ($tiendas as $tienda )
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between">
            

               <div class="flex gap-3 items-center">
                        <a href="" class=" py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">
                            <img src="{{ asset('storage/logotiendas/').'/'.$tienda->logo }}" class="w-28" alt="{{$tienda->logo }}">
                        </a>
                      
               </div>

               <div class="leading-10">
                        <a href="#" class="text-xl font-bold">
                        {{$tienda->nombre}}
                        </a>
                        <p>
                            {{$tienda->lema}}
                        </p>
               </div>

               <div class="flex gap-3 items-center">
                
                <a href=" {{route('ver-tienda', $tienda->id)}}  " >
                        <button class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full">
                            Ver  Tienda
                        </button>
                </a>        
               </div>
        </div>
    @endforeach
   

</div>

