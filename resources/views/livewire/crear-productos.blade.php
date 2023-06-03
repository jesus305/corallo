
            
            <form class="md:w-1/2 space-x-5" wire:submit.prevent='CrearProductos' enctype="multipart/form-data">
                <div>
                       <x-label for="nombre" :value="__('Nombre de la Prenda')" class="mb-0 mt-2"/>
                       <x-input id="nombre" wire:model="nombre" class="block  w-full mt-0" type="text" :vale="old('nombre')" placeholder="Camiseta morado básico"/>
                       @error('nombre')
                       <livewire:mostrar-alerta :message="$message" />              
                       @enderror

                       {{-- <x-label for="codigo_referencia" :value="__('Codigo de Referencia')" class="mb-0 mt-2"/>
                       <x-input id="codigo_referencia" wire:model="codigo_referencia" class="block  w-full mt-0" type="text" :vale="old('codigo_referencia')" placeholder="Ref.: 68216 "/>
                       @error('codigo_referencia')
                       <livewire:mostrar-alerta :message="$message" />  
                       @enderror   --}}


                       <x-label for="ubicacion_bodega" :value="__('Ubicacion en bodega')" class="mb-0 mt-2"/>
                       <x-input id="ubicacion_bodega" wire:model="ubicacion_bodega" class="block  w-full mt-0" type="text" :vale="old('codigo_referencia')" placeholder="Ubicacion en bodega "/>
                       @error('ubicacion_bodega')
                       <livewire:mostrar-alerta :message="$message" />  
                       @enderror  

                       
                       <x-label for="porcentaje_descuento" :value="__('Porcentaje_descuento')" class="mb-0 mt-2"/>
                       <x-input id="porcentaje_descuento" wire:model="porcentaje_descuento" class="block  w-full mt-0" type="text" :vale="old('porcentaje_descuento')" placeholder="50%"/>
                       @error('porcentaje_descuento')
                       <livewire:mostrar-alerta :message="$message" />  
                       @enderror 

                       <x-label for="precio_final" :value="__('Precio del Producto')" class="mb-0 mt-2"/>
                       <x-input id="precio_final" wire:model="precio_final" class="block  w-full mt-0" type="text" :vale="old('precio')" placeholder="$30.000 "/>
                       @error('precio_final')
                       <livewire:mostrar-alerta :message="$message" />  
                       @enderror 
                       

                       <x-label for="descripcion_modelo" :value="__('Descricion de la modelo')" class="mb-0 mt-2"/>
                       <x-input id="descripcion_modelo" wire:model="descripcion_modelo" class="block  w-full mt-0" type="text" :vale="old('descripcion_modelo')" placeholder="La modelo mide 1.65m y tiene una talla M "/>
                       @error('descripcion_modelo')
                       <livewire:mostrar-alerta :message="$message" />  
                       @enderror 
                       
                       

               <x-button class="block mt-8 w-full justify-center ">
                   Registrar Prenda
               </x-button>  
              </div>
       </form> 


      