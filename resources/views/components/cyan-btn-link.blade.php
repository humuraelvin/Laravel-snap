// resources/views/components/cyan-btn-link.blade.php
<a {{ $attributes->merge(['class' => 'btn cyan-btn']) }}>
    {{ $slot }}
</a>