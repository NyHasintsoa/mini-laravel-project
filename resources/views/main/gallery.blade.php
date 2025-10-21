@php
$images = [
    "r0.jpg",
    "r1.jpg",
    "r2.jpg",
    "r3.jpg",
    "r4.jpg",
    "r5.jpg",
    "r6.jpg",
    "r7.jpg",
    "r8.jpg",
    "r9.jpg",
    "r10.jpg",
    "r11.jpg",
];
@endphp

<x-layouts.main.base-home>
    <!-- Masonry Cards -->
    <div class="max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-3 gap-6">

            @foreach ($images as $image)
                <div class="">
                    <!-- Card -->
                    <a class="group relative block rounded-xl overflow-hidden focus:outline-hidden" href="#">
                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                            <img
                                class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                                src="/images/gallery/{{ $image }}"
                                alt="Images {{ $image }}"
                            >
                        </div>
                        <div class="absolute bottom-0 start-0 end-0 p-1 sm:p-2">
                            <div
                                class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-2 dark:bg-neutral-800 dark:text-neutral-200">
                                Workplace personalities
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
            @endforeach

        </div>
        <!-- End Grid -->
    </div>
    <!-- End Masonry Cards -->
</x-layouts.main.base-home>
