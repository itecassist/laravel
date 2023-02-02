@props(['name'=>null, 'wire'=>null, 'title'])
<label class="row mb-3">
    <span class="col">{{ $title }}</span>
    <span class="col-auto">
      <label class="form-check form-check-single form-switch form-label">
        <input type="checkbox"
            {{ $name ? 'name='.$name.'' : '' }}
            {{ $wire ? 'wire:model.defer='.$wire.'' : '' }}
            {!! $attributes->merge(['class' => 'form-check-input']) !!}>
      </label>
    </span>
  </label>
