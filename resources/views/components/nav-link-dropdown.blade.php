@props(['active', 'id'])

@php
$classes = ($active ?? false)
            ? 'nav-link dropdown-toggle active font-weight-bolder text-primary'
            : 'nav-link dropdown-toggle';
@endphp

<li class="nav-item dropdown">
    <a {{ $attributes->merge(['class' => $classes]) }}  data-bs-toggle="dropdown" role="button" id="{{ $id }}" aria-expanded="false">
        {{ $slot }}
    </a>
    <ul class="dorpdown-menu" aria-labelledby="{{ $id }}">
        {{ $items }}
    </ul>
</li>
