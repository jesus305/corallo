<x-app-layout>
    @include('layouts.navigation')
   {{--  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Corallo Rosso S.A.S') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <h1 class="text-2xl font-bold text-center mb-10"> Agregar  imagenes y tallas del Producto</h1>
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
                        <livewire:crear-detail
                        :producto="$producto"
                        />
                    </div>


                    

  @foreach ($imgcolores as $imgcolor)
      <div class="mx-auto mt-8 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-6 lg:gap-x-8 lg:px-8">
           
            <div class="md:justify-center">
                <x-label for="descripcion" :value="__('Color ')" class="mb-0 mt-2"/><b>ID: </b>{{$imgcolor->id}}
                <img src="{{ asset('storage/productos/').'/'.$imgcolor->color }}"      alt="{{$imgcolor->color}}" class="object-cover object-center">
            </div>
            <div class="md:justify-center">
                <x-label for="descripcion" :value="__('Imagen 1')" class="mb-0 mt-2"/>
                <img src="{{ asset('storage/productos/').'/'.$imgcolor->img1 }}"       alt="{{$imgcolor->img1}}" class="h-full w-full object-cover object-center">
            </div>    
            <div class="md:justify-center">
                <x-label for="descripcion" :value="__('Imagen 2')" class="mb-0 mt-2"/>
                <img src="{{ asset('storage/productos/').'/'.$imgcolor->img2 }}"       alt="{{$imgcolor->img2}}" class="h-full w-full object-cover object-center">
            </div>  
            <div class="md:justify-center">
                <x-label for="descripcion" :value="__('Imagen 3')" class="mb-0 mt-2"/>
            <img src="{{ asset('storage/productos/').'/'.$imgcolor->img3 }}"       alt="{{$imgcolor->img3}}" class="h-full w-full object-cover object-center">
            </div> 
            <div class="md:justify-center">
                <x-label for="descripcion" :value="__('Imagen 4')" class="mb-0 mt-2"/>
            <img src="{{ asset('storage/productos/').'/'.$imgcolor->img4 }}"       alt="{{$imgcolor->img4}}" class="h-full w-full object-cover object-center">
            </div>





            <div  class="mt-0" >
               
                <form action="{{route('crear-tallas',['producto'=>$producto,'imgcolor'=>$imgcolor]) }}"  method="POST" > 
                    @csrf
                        <table  class="w-full">
                            <td>
                                <div>
                                    <x-label for="cantidad" :value="__('Cant')"/>
                                    <input  id="cantidad" name="cantidad" value="{{old('cantidad')}}"  class="w-16" type="text">
                                    @error('cantidad')
                                    <livewire:mostrar-alerta :message="$message" />  
                                    @enderror
                                </div>    
                            </td>
                            <td>
                                <div>
                                    <x-label for="talla" :value="__('Tallas')"/>
                                    <select  id="talla"  name="talla" value="{{old('talla')}}"  class="w-23">
                                            <option value="">--</option>
                                            <option value="xs">XS</option>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                    </select>
                                    @error('talla')
                                    <livewire:mostrar-alerta :message="$message" />  
                                    @enderror  
                        
                                </div>    
                            </td>
                            <td>
                                <div class="mt-7 ml-2">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-1.5 text-center inline-flex items-center dark:bg-red-400 dark:hover:bg-red-300 dark:focus:ring-red-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                    </button>
                                    
                                </div>  

                            </td>
                        </table>
                </form>
             @if($tallas->count())   
                <table class="mt-2 w-full">
                       <tr>
                            <th> <x-label for="cantidad" :value="__('Cant.')"/></th>
                            <th> <x-label for="tallas" :value="__('Tallas')"/></th>
                       </tr>
              @foreach ($tallas as $talla) 
                    @if ($talla->imgcolor_id == $imgcolor->id )
                       <tr>
                            <th> {{$talla->cantidad}} </th>
                            <th class="uppercase"> {{$talla->talla}}</th>
                            <th>
                                   <a href="#">   
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                      </svg>
                                   </a>    
                            </th>
                       </tr>
                    @endif   
              @endforeach         
                </table>

                @else
                <h2 class=" text-lg text-center font-black my-5">No hay Registro</h2>
                
                @endif  
            </div>
            
      </div>
  @endforeach
  
   
  


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
