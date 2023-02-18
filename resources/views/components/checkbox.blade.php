@props(['id'])

<div class="form-check form-switch">
    <input {!! $attributes->merge(['class' => 'form-check-input']) !!} type="checkbox" wire:model.defer="{{ $id }}" id="{{ $id }}" name="{{ $id }}">
    <label class="form-check-label" for="{{ $id }}">{{ $slot }}</label>
</div>
