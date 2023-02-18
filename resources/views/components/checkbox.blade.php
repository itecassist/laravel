@props(['id'])

<div class="custom-control custom-switch">
    
    <input {!! $attributes->merge(['class' => 'custom-control-input']) !!} type="checkbox" wire:model.defer="{{ $id }}" id="{{ $id }}" name="{{ $id }}">
    <label class="custom-control-label" for="{{ $id }}">{{ $slot }}</label>
</div>
