<x-app-layout>
  <x-menu-home class="mt-0" />

  {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Corallo Rosso S.A.S') }}
    </h2>
  </x-slot> --}}

  <div class="py-0">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-2 bg-white border-b border-gray-200 mt-0">
          <div class="md:flex md:justify-center p-0">

            {{-- cotendido de producto detail --}}
            <section class="py-2">
              <div class="container mx-auto px-4">
                    <livewire:producto-detail
                    :producto="$producto"
                    />
              </div>
            </section>


          </div>

        </div>
      </div>
    </div>
  </div>


  <x-footer class="mt-0" />

</x-app-layout>