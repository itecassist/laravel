
<select {{ $attributes->merge(['class' => 'form-select w-20 form-select-sm']) }} wire:model="pageSize">
    {{ $slot }}
</select>
