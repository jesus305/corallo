
            <form class="md:w-1/2 space-x-5" wire:submit.prevent='CrearDetail' enctype="multipart/form-data">
                <div>
                         {{--      ----------------Color------------------------ --}}
                        <x-label for="color" :value="__('Color de Prenda')" class="mt-4 mb-0" />
                                <input id="color" wire:model="color" class="block mt-1 w-full" type="file"  accept="image/*" />
                                @error('color')
                                <livewire:mostrar-alerta :message="$message" />              
                                @enderror
                                 <div class="w-full flex justify-center ">
                                        @if ($color)
                                                <img class="border-dashed border-2 border-sky-500" src="{{$color->temporaryUrl() }}">
                                        @endif
                                </div>



                               {{--  -------------------------------grujpo de 4 imagenes ------------------------------------------------- --}}
                     <div class="grid grid-cols-3 gap-4">
                        <div class="">
                           {{--      ----------------img 1------------------------ --}}
                                <x-label for="img1" :value="__('Imagen 1')" class="mt-4 mb-0" />
                                <input id="img1" wire:model="img1" class="block mt-1 w-full" type="file"  accept="image/*" />
                                @error('img1')
                                <livewire:mostrar-alerta :message="$message" />              
                                @enderror
                                 <div class="w-full flex justify-center ">
                                        @if ($img1)
                                                <img class="border-dashed border-2 border-sky-500" src="{{$img1->temporaryUrl() }}">
                                        @endif
                                </div>
                        </div>
                        <div class=""> 
                           {{--      ----------------img 2------------------------ --}}
                                <x-label for="img2" :value="__('Imagen 2')" class="mt-4 mb-0" />
                                <input id="img2" wire:model="img2" class="block mt-1 w-full" type="file"  accept="image/*" />
                                @error('img2')
                                <livewire:mostrar-alerta :message="$message" />              
                                @enderror
                                 <div class="w-full flex justify-center">
                                        @if ($img2)
                                                <img class="border-dashed border-2 border-sky-500" src="{{$img2->temporaryUrl() }}">
                                        @endif
                                </div>
                        </div>
                        <div class="">  
                             {{--    ----------------img 3------------------------ --}}
                                <x-label for="img3" :value="__('Imagen 3')" class="mt-4 mb-0" />
                                <input id="img3" wire:model="img3" class="block mt-1 w-full" type="file"  accept="image/*" />
                                @error('img3')
                                <livewire:mostrar-alerta :message="$message" />              
                                @enderror
                                 <div class="w-full flex justify-center">
                                        @if ($img3)
                                                <img class="border-dashed border-2 border-sky-500" src="{{$img3->temporaryUrl() }}">
                                        @endif
                                </div>
                        </div>
                        <div class="">  
                           {{--      ----------------img 4------------------------ --}}
                                <x-label for="img4" :value="__('Imagen 4')" class="mt-4 mb-0" />
                                <input id="img4" wire:model="img4" class="block mt-1 w-full" type="file"   />
                                @error('img4')
                                <livewire:mostrar-alerta :message="$message" />              
                                @enderror
                                 <div class="w-full flex justify-center">
                                        @if ($img4)
                                                <img class="border-dashed border-2 border-sky-500" src="{{$img4->temporaryUrl() }}">
                                        @endif
                                </div>
                          </div>
                         </div> 



                       
                     

               <x-button class="block mt-8 w-full justify-center ">
                   Registrar Color e imagenes
               </x-button>  
              </div>
       </form> 



       
