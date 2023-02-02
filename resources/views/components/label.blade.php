@props(['for'])

<label {{ $attributes->merge(['class' => 'form-label']) }} for="{{ $for }}">
    {{ $slot }}
</label>
