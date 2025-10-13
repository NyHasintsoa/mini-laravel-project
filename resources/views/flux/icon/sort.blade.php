@props([
    'direction',
    'field',
    'sortField',
])

@php
    if ($field === null) {
        throw new \Exception('Please set the field of the sort');
    }
    $classes = Flux::classes("shrink-0");
@endphp

<svg
    {{ $attributes->class($classes) }}
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
>
    <?php if ($field === $sortField): ?>
        <?php if ($direction === 'ASC'): ?>
            <path d="m7 9 5-5 5 5"></path>
        <?php else: ?>
            <path d="m7 15 5 5 5-5"></path>
        <?php endif; ?>
    <?php else: ?>
        <path d="m7 15 5 5 5-5"></path>
        <path d="m7 9 5-5 5 5"></path>
    <?php endif; ?>
</svg>
