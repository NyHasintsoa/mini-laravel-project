<x-layouts.main.base>
    <div class="py-16">
        <!-- Listings -->
        <div class="px-36 grid grid-cols-2 lg:grid-cols-3 md:gap-3 gap-5">
            @for ($i = 0; $i < 9; $i++)
                <div class="flex flex-col bg-white border border-gray-200 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <div class="relative group">
                        <img class="w-full h-36 sm:h-44 object-cover rounded-t-xl"
                            src="/storage/products/images/product-image.jpg"
                            alt="Product image">

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3 group-hover:opacity-100 lg:opacity-0">
                            <div
                                class="p-0.5 sm:p-1 inline-flex items-center bg-white border border-gray-200 lg:shadow-2xs rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <!-- Button Icon -->
                                <div class="hs-tooltip [--placement:bottom]  inline-block">
                                    <a class="hs-tooltip-toggle size-8 inline-flex justify-center items-center gap-2 rounded-lg border border-white text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 focus:outline-hidden dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        href="/storage/products/images/product-image.jpg"
                                        target="_blank" download="">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" x2="12" y1="15" y2="3"></line>
                                        </svg>
                                    </a>

                                    <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700" role="tooltip">
                                        Télécharger
                                    </span>
                                </div>
                                <!-- End Button Icon -->

                                <!-- Button Icon -->
                                <div class="hs-tooltip [--placement:bottom] inline-block">
                                    <button type="button"
                                        class="hs-tooltip-toggle size-7 inline-flex justify-center items-center gap-2 rounded-lg border border-white text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 focus:outline-hidden dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        data-hs-overlay="#hs-pro-dupfmsh" aria-expanded="false">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                            <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                        </svg>
                                    </button>

                                    <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700" role="tooltip">
                                        Partager
                                    </span>
                                </div>
                                <!-- End Button Icon -->
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>

                    <!-- Body -->
                    <div class="p-3 flex items-center gap-x-3">
                        <!-- Icon -->
                        <span
                            class="flex shrink-0 justify-center items-center size-7 md:w-9 md:h-9 bg-white border border-gray-200 text-gray-500 rounded-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400">
                            <svg class="shrink-0 md:size-3.5 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                <circle cx="9" cy="9" r="2"></circle>
                                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                            </svg>
                        </span>
                        <!-- End Icon -->

                        <div class="grow truncate">
                            <p class="block truncate text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                cover_image.jpg
                            </p>
                            <p class="block truncate text-xs text-gray-500 dark:text-neutral-500">
                                James Feb 25th, 2023
                            </p>
                        </div>
                    </div>
                    <!-- End Body -->
                </div>
            @endfor
        </div>
        <!-- End Listings -->

        <!-- Pagination -->
        <div class="flex justify-center items-center mt-10">
            <nav class="flex items-center gap-x-1" aria-label="Pagination">
                <button type="button"
                    class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                    aria-label="Previous" disabled="">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                    <span>Previous</span>
                </button>
                <div class="flex items-center gap-x-1">
                    <button type="button"
                        class="min-h-9.5 min-w-9.5 flex justify-center items-center bg-gray-200 text-gray-800 py-2 px-3 text-sm rounded-lg focus:outline-hidden focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-600 dark:text-white dark:focus:bg-neutral-500"
                        aria-current="page">1</button>
                    <button type="button"
                        class="min-h-9.5 min-w-9.5 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-lg focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">2</button>
                    <button type="button"
                        class="min-h-9.5 min-w-9.5 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-lg focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">3</button>
                </div>
                <button type="button"
                    class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                    aria-label="Next">
                    <span>Next</span>
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </button>
            </nav>
        </div>
        <!-- End Pagination -->
    </div>
</x-layouts.main.base>
