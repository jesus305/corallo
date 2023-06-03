

            <form class="md:w-1/2 space-x-5" wire:submit.prevent='CrearColeccion' enctype="multipart/form-data">
                 <div>
                        
                       
                        <x-label for="nombre" :value="__('Nombre de la coleccíon')" class="mb-0 mt-2"/>
                        <x-input id="nombre" wire:model="nombre" class="block  w-full mt-0" type="text" :vale="old('nombre')" placeholder="nombre de la coleccíon"/>
                        @error('nombre')
                        <livewire:mostrar-alerta :message="$message" />              
                        @enderror

                        <x-label for="descripcion" :value="__('Descripcíon de la coleccíon')" class="mb-0 mt-2"/>
                        <x-input id="descripcion" wire:model="descripcion" class="block  w-full mt-0" type="text" :vale="old('nombre')" placeholder="Descripcíon de la coleccíon "/>
                        @error('descripcion')
                        <livewire:mostrar-alerta :message="$message" />  
                        @enderror  
                        
                        


                        <x-label for="banner" :value="__('Banner de Colección ( Tamaño: 1090 X 250 px, Formato: .WEBP)')" class="mt-4 mb-0" />
                        <input id="banner" wire:model="banner" class="block mt-1 w-full" type="file"  accept="image/*" />
                        @error('banner')
                        <livewire:mostrar-alerta :message="$message" />              
                        @enderror
           
                         <div class="w-full flex justify-center">
                                @if ($banner)
                                        <img  src="{{$banner->temporaryUrl() }}">
                                @endif
                        </div>


                        
                        <x-label for="portadaimg" :value="__('Portada de Colección ( Tamaño: 1025 X 1025 px, Formato: .WEBP)')" class="mt-4 mb-0" />
                        <input id="portadaimg" wire:model="portadaimg" class="block mt-1 w-full" type="file"  accept="image/*" />
                        @error('portadaimg')
                        <livewire:mostrar-alerta :message="$message" />              
                        @enderror
           
                         <div class="w-full flex justify-center">
                                @if ($portadaimg)
                                        <img  src="{{$portadaimg->temporaryUrl() }}">
                                @endif
                        </div>
                        

                <x-button class="block mt-8 w-full justify-center ">
                    Registrar Tienda
                </x-button>  
               </div>
        </form> 
