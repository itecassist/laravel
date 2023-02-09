<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark text-uppercase btn-sm']) }}>
    {{ $slot }}
</button>
