
<x-guest-layout>
    
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nombre de usuario')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
            </div>
             <!-- Tipo de Docunebto -------------------------------------------------------------------------------------->
             <div class="mt-4">
                <x-label for="documento" :value="__('TIPO DE DOCUMENTO')" />

                <select id="documento" name="documento" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  :value="old('documento')" >
                    <option value="" >-- Seleccionar Campo --</option>
                    <option value="Cedula" >Cedula</option>
                    <option value="Nit" >Nit</option>
                    <option value="Pasaporte" >Pasaporte</option>
                </select>
            </div>
            
            
            <!-- Numero de documento -->
            <div class="mt-4">
                <x-label for="numero_documento" :value="__('Número  de Documento')" />

                <x-input id="numero_documento" class="block mt-1 w-full" type="text" name="numero_documento" :value="old('numero_documento')"  />
            </div>
            

             <!-- Rol -------------------------------------------------------------------------------------->
             <div class="mt-4">
                <x-label for="rol" :value="__('¿Qué tipo de cuentas deseas crear ?')" />

                <select id="rol" name="rol" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  :value="old('rol')" >
                    <option value="" >-- Seleccionar Campo --</option>
                    <option value="1" >Cliente</option>
                    <option value="2" >Empresa</option>
                </select>
            </div>
          {{--------------------------  Departamentos de colombia --}}
              <div class="mt-4">
                <x-label for="departamentos" :value="__('Departamento')" />
                <select id="departamentos"   name="departamentos" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <x-departamentos />
                </select>
            </div>

            {{--------------------------  Municipios de colombia --}}
           

            <div class="mt-4">
                <x-label for="municipios" :value="__('Municipio')" />
                    <select id="municipios"  name="municipios" wire:model="municipios" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <x-municipios />
                    </select>
            </div>
         
            
              
            <!-- Numero de documento -->
            <div class="mt-4">
                <x-label for="direccion" :value="__('Direccíon')" />

                <x-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')"  />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                 autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"  />
            </div>

            <div class="flex justify-between mt-4">
                <x-link :href="route('login')">
                   Iniciar Sesion
                </x-link>
                
                <x-link :href="route('password.request')">
                    Olvidaste tu contraseña?
                </x-link>
            </div>


            <x-button class="w-full  justify-center mt-4">
                {{ __('Register') }}
            </x-button>
        </form>
    </x-auth-card>


</x-guest-layout>
