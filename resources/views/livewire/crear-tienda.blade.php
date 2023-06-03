<form class="md:w-1/2 space-x-5" wire:submit.prevent='CrearTienda' enctype="multipart/form-data">
        <div >
                <x-label for="nombre" :value="__('Nombre de la Tienda')" class="mb-0"/>
                <x-input id="nombre" wire:model="nombre" class="block mt-1 w-full" type="text" :vale="old('nombre')" placeholder="Ej. Corallo Rosso "/>
                @error('nombre')
                  <livewire:mostrar-alerta :message="$message" />              
                @enderror

                
                <x-label for="nit" :value="__('Nit de la Tienda')" class="mb-0 mt-4"/>
                <x-input id="nit" wire:model="nit" class="block mt-1 w-full" type="text" :vale="old('nombre')" placeholder="Nit "/>
                @error('nit')
                  <livewire:mostrar-alerta :message="$message" />              
                @enderror


                <x-label for="lema" :value="__('Lema o frase ( Opcional )')" class="mt-4 mb-0" />
                <x-textarea id="lema" wire:model="lema" class="block mt-1 w-full "  :vale="old('lema')" placeholder="Ej. La elegancia es la única belleza que nunca desaparece" /> 
                @error('lema')
                <livewire:mostrar-alerta :message="$message" />              
                @enderror


               


                <x-label for="logo" :value="__('Logo ( Tamaño: 512 X 512 px, Formato: .PNG o .SVG)')" class="mt-4 mb-0" />
                <input id="logo" wire:model="logo" class="block mt-1 w-full" type="file"  accept="image/*" />
                @error('logo')
                <livewire:mostrar-alerta :message="$message" />              
                 @enderror

                 <div class="w-full flex justify-center" >
                        @if ($logo)
                                <img  src="{{$logo->temporaryUrl() }}">
                        @endif
                </div>

                <x-label for="banner" :value="__('Banner ( Tamaño: 1000  x 300 px, Formato: .PNG o .SVG)')" class="mt-4 mb-0" />
                <input id="banner" wire:model="banner" class="block mt-1 w-full" type="file"  accept="image/*" />
                @error('banner')
                <livewire:mostrar-alerta :message="$message" />              
                 @enderror

                 <div class="w-full flex justify-center" >
                        @if ($banner)
                                <img  src="{{$banner->temporaryUrl() }}">
                        @endif
                </div>


                <x-label for="descripcion" :value="__('Descripción de la Tienda')" class="mt-4 mb-0" />
                <x-textarea id="descripcion" wire:model="descripcion" class="block mt-1 w-full "  :vale="old('descripcion')" placeholder="Ej. Somos una Tienda dedicada a la comercialización de ropa y accesorios" />
                @error('descripcion')
                <livewire:mostrar-alerta :message="$message" />              
                @enderror
                

                <x-label for="telefono" :value="__('Telefono Privado de la Tienda ( Para comunicarnos  con usted )')" class="mt-4 mb-0" />
                <x-input id="telefono" wire:model="telefono" class="block mt-1 w-full" type="text" :vale="old('telefono')" placeholder="Celular"/>
                @error('telefono')
                <livewire:mostrar-alerta :message="$message" />              
                @enderror


                <x-label for="correo" :value="__('Correo Privado de la Tienda ( Para comunicarnos  con usted )')" class="mt-4 mb-0" />
                <x-input id="correo" wire:model="correo" class="block mt-1 w-full" type="text" :vale="old('correo')" placeholder="Ej. ejemplo@gmail.com"/>
                @error('correo')
                <livewire:mostrar-alerta :message="$message" />              
                @enderror


                <x-label for="departamentos" :value="__('Departamento ')" class="mt-4 mb-1" />
                <select id="departamentos"   name="departamentos" wire:model="departamentos" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <x-departamentos />
                </select>
                @error('departamentos')
                <livewire:mostrar-alerta :message="$message" />              
                @enderror

 
                <x-label for="municipios" :value="__('municipios ')" class="mt-4 mb-1" />
                <select id="municipios"  name="municipios" wire:model="municipios" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <x-municipios />
                    </select>
                @error('municipios')
                <livewire:mostrar-alerta :message="$message" />              
                @enderror


                <x-label for="direccion" :value="__('Direccíon')" class="mt-4 mb-0" />
                <x-input id="direccion" wire:model="direccion" class="block mt-1 w-full" type="text" :vale="old('direccion')" placeholder="Dirección"/>
                @error('direccion')
                <livewire:mostrar-alerta :message="$message" />              
                 @enderror


                <x-button class="block mt-8 w-full justify-center ">
                    Registrar Tienda
                </x-button>    


        </div>
</form>        
