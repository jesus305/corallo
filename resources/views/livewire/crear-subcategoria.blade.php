
     

<form wire:submit.prevent='CrearSubcategoria' class="md:w-1/2 space-x-5" enctype="multipart/form-data">
  <div>
    <select id="nombre" wire:model="nombre" :vale="old('nombre')" class="block  w-full mt-0" type="text"
      placeholder="nombre">
                        <option value="">--- Escoger Categoría ---</option>
            @foreach ($listadosubca as $listasubca)
                @if ($listasubca->categoria == $categoria_nombre ) 
                        <option value="{{$listasubca->nombre}}">{{$listasubca->nombre}}</option>
                @endif          
            @endforeach
    </select>

    @error('nombre')
    <livewire:mostrar-alerta :message="$message" />
    @enderror       

    


    <x-button class="block mt-8 w-full justify-center ">
      Registrar Categoria
    </x-button>
  </div>
</form>


