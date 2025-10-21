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
                                    href="{{ route('admin.courses.create') }}"
                                >
                                    <x-flux::icon.plus-circle />
                                    Nouveau livre
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead class="bg-gray-50 dark:bg-neutral-900">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Titre
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Prix
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Type
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                    Créé le
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach ($data as $course)
                            <tr class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
                                <td class="size-px whitespace-nowrap">
                                    <span class="block px-6 py-2">
                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                            {{ $course->product->title }}
                                        </span>
                                    </span>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <span class="block px-6 py-2">
                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                            {{ $course->product->price }}
                                        </span>
                                    </span>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <span class="block px-6 py-2">
                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                            {{ $course->product->product_type }}
                                        </span>
                                    </span>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <span class="block px-6 py-2">
                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                            {{ $course->product->created_at }}
                                        </span>
                                    </span>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <flux:dropdown position="top" align="end">
                                        <button type="button" class="py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-lg text-gray-700 align-middle disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                            </svg>
                                        </button>

                                        <flux:menu>
                                            <div class="p-1 space-y-0.5">
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                    href="{{ route('admin.courses.edit', ['course' => $course->id]) }}">
                                                    Modifier
                                                </a>

                                                <form method="POST" action="{{ route('admin.courses.delete', ['course' => $course->id]) }}" class="w-full">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-red-500 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                                                        <x-flux::icon.trash class="size-6" />
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </flux:menu>
                                    </flux:dropdown>
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
