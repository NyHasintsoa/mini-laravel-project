@php
    $classes = Flux::classes('py-1.5 sm:py-2 px-3 pe-11 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600');
@endphp

<div class="relative">
    @if ($type === 'textarea')
        <textarea id="{{ $id ?? "input-$name" }}" {{ $attributes->class($classes) }}>{{ old($name, ($value ?? '')) }}</textarea>
    @else
        <input {{ $attributes->class($classes) }} id="{{ $id ?? "input-$name" }}" value="{{ old($name, ($value ?? '')) }}" />
    @endif
    @error($name)
        <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
            <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" x2="12" y1="8" y2="12"></line>
                <line x1="12" x2="12.01" y1="16" y2="16"></line>
            </svg>
        </div>
    @enderror
</div>

@error($name)
    <p class="text-sm text-red-600 mt-2">
        @foreach ($errors->get($name) as $message)
            {{ $message }}
        @endforeach
    </p>
@enderror
