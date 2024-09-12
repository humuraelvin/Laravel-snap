// resources/views/components/amber-btn-link.blade.php
<a {{ $attributes->merge(['class' => 'btn amber-btn']) }}>
    {{ $slot }}
</a>
