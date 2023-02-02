@props(['disabled' => false, 'value'=>false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} rows="5">{!! $value !!}</textarea>
