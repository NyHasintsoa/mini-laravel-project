<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
<!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                    <!-- Header -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                        <!-- Input -->
                        <div class="sm:col-span-1">
                            <label for="search-table-query" class="sr-only">Recherche</label>
                            <div class="relative">
                                <input
                                    wire:model.live.debounce.500ms='search'
                                    type="text"
                                    id="search-table-query"
                                    name="search-table-query"
                                    class="py-2 px-3 ps-11 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Search"
                                />
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <x-flux::icon.search class="size-4 text-gray-400 dark:text-neutral-500" />
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div>
                            <div class="inline-flex gap-x-2">
                                <a
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    href="{{ route('admin.products.create') }}"
                                >
                                    <x-flux::icon.plus-circle />
                                    Nouveau Produit
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead class="bg-gray-50 dark:bg-neutral-900">
                        <tr>
                            <th wire:click="sortBy('title')" scope="col" class="cursor-pointer px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Titre
                                    <x-flux::icon.sort field='title' class="size-3.5" direction='{{ $sortDirection }}' sortField='{{ $sortField }}' />
                                </div>
                            </th>

                            <th wire:click="sortBy('price')" scope="col" class="cursor-pointer px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Prix
                                    <x-flux::icon.sort field='price' class="size-3.5" direction='{{ $sortDirection }}' sortField='{{ $sortField }}' />
                                </div>
                            </th>

                            <th wire:click="sortBy('product_type')" scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Type
                                    <x-flux::icon.sort field='product_type' class="size-3.5" direction='{{ $sortDirection }}' sortField='{{ $sortField }}' />
                                </div>
                            </th>

                            <th wire:click="sortBy('created_at')" scope="col" class="cursor-pointer px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Créé le
                                    <x-flux::icon.sort field='created_at' class="size-3.5" direction='{{ $sortDirection }}' sortField='{{ $sortField }}' />
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach ($data as $product)
                            <tr class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
                                <td class="size-px whitespace-nowrap">
                                    <span class="block px-6 py-2">
                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                            {{ $product->title }}
                                        </span>
                                    </span>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <span class="block px-6 py-2">
                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                            {{ $product->price }}
                                        </span>
                                    </span>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <span class="block px-6 py-2">
                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                            {{ $product->product_type }}
                                        </span>
                                    </span>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <span class="block px-6 py-2">
                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                            {{ $product->created_at }}
                                        </span>
                                    </span>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                <button type="button" class="block" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-ai-invoice-modal" data-hs-overlay="#hs-ai-invoice-modal">
                                    <span class="px-6 py-1.5">
                                    <span class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-lg border border-gray-200 font-medium bg-white text-gray-700 shadow-2xs align-middle hover:bg-gray-50 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                                        <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        View
                                    </span>
                                    </span>
                                </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-center md:items-center border-t border-gray-200 dark:border-neutral-700">
                        <!-- Pagination -->
                        {{ $data->links() }}
                        <!-- End Pagination -->
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
<!-- End Card -->
</div>
