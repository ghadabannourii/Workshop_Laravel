@php
    $classes = match ($type) {
        'success' => 'alert alert-success',
        'error' => 'alert alert-error',
        'info' => 'alert alert-info',
        default => 'alert alert-info',
    };
@endphp

<div class="{{ $classes }}">
    {{ $slot }}
</div>