<x-app-layout>
    <x-menu-home class="mt-0" />



   

    <div class="flex flex-no-wrap">
        <livewire:list-categoy
        :subcategory="$subcategory"
        :category="$category"
        />
    </div>

     


  <x-footer class="mt-0" />
    



</x-app-layout>
