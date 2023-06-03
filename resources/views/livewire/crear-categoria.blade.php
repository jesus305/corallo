<form wire:submit.prevent='CrearCategoria' class="md:w-1/2 space-x-5" enctype="multipart/form-data">
  <div>
    <select id="nombre"  wire:model="nombre" :vale="old('nombre')"  class="block  w-full mt-0" type="text" placeholder="Categoria">
        <option value="">--- Escoger Categoría ---</option>
        <option value="jeans">Jeans</option>
        <option value="ropa">Ropa</option>
        <option value="complementos">Complementos</option>
        <option value="zapatos">Zapatos</option>
    </select>

    @error('nombre')
    <livewire:mostrar-alerta :message="$message" />
    @enderror


   
    
    <x-label for="puesto" :value="__('Posicion en la lista')" class="mb-0 mt-2"/>
    <select id="puesto"  wire:model="puesto" :vale="old('puesto')"  class="block  w-full mt-0" type="text" placeholder="Categoria">
      <option value="">--- Escoger Categoría ---</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>

                        @error('puesto')
                        <livewire:mostrar-alerta :message="$message" />  
                        @enderror 

    <x-button class="block mt-8 w-full justify-center ">
      Registrar Categoria
    </x-button>
  </div>

  
</form>

