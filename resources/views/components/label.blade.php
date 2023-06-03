@props(['value'])



<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-500 font-bold uppercase mb-2']) }}>
    {{ $value ?? $slot }}
</label>
