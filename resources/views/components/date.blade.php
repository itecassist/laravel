@props([ 'id'])

    <input
        type="date"
        class = 'form-control'
        id='{{ $id }}'
        {!! $attributes->merge(['class' => 'form-control']) !!}
    />


