@props(['name'=>null, 'wire'=>null])
<label class="row">
    <span class="col form-label">{{ $slot }}</span>
    <span class="col-auto">
    <label class="form-check form-check-single form-switch">
        <input class="form-check-input" type="checkbox"
        @if ($name)
            name="{{ $name }}"
        @else
            wire:model="{{ $wire }}"
        @endif
        >
    </label>
    </span>
</label>

