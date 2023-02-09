@props(['id', 'active', 'trigger'])
@php
$classes = ($active ?? false)
            ? 'nav-link dropdown-toggle font-weight-bolder text-primary'
            : 'nav-link dropdown-toggle';
@endphp
<li class="nav-item dropdown">
    <a id="{{ $id }}" {!! $attributes->merge(['class' => $classes]) !!} role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $trigger }}
    </a>

    <ul class="dropdown-menu" aria-labelledby="{{ $id }}">
        {{ $content }}
    </ul>
</li>
