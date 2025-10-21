<x-layouts.app :title="__('Dashboard')">
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto"><!-- Card -->
        <div class="bg-white rounded-xl shadow-xs p-4 sm:p-7 dark:bg-neutral-800">
            <div class="mb-8 text-center">
                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                    Ajout Livre
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Uploader le fichier de cours
                </p>
            </div>

            <form method="post" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Grid -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                    <div class="sm:col-span-3">
                        <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Fichier
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="flex items-center gap-5">
                            <div class="flex gap-x-2">
                                <div>
                                    <input class="hidden" type="file" name='file_path' id="input-file-path">
                                    <label for="input-file-path"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        <x-flux::icon.document class="shrink-0 size-4" width="24" height="24" />
                                        Upload fichier
                                    </label>
                                    @error('file_path')
                                        <p class="text-sm text-red-600 mt-2">
                                            @foreach ($errors->get('file_path') as $message)
                                                {{ $message }}
                                            @endforeach
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Images
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="flex items-center gap-5">
                            <div class="flex gap-x-2">
                                <div>
                                    <input class="hidden" type="file" name='image_path' id="input-image-path">
                                    <label for="input-image-path"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        <x-flux::icon.document class="shrink-0 size-4" width="24" height="24" />
                                        Upload fichier
                                    </label>
                                    @error('image_path')
                                        <p class="text-sm text-red-600 mt-2">
                                            @foreach ($errors->get('image_path') as $message)
                                                {{ $message }}
                                            @endforeach
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="input-title"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Titre
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <x-input type='text' name='title' />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="input-title"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Entreprise
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <x-select name='entreprise_id'>
                                <option selected>Select Entreprise</option>
                            @foreach ($entreprises->pluck('name', 'id') as $key => $label)
                                <option value="{{ $key }}">{{ $label }}</option>
                            @endforeach
                        </x-select>
                    </div>

                    <div class="sm:col-span-3">
                        <label
                            for="input-price"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Prix
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <div>
                            <label for="input-price" class="sr-only">Ar</label>
                            <div class="flex rounded-lg">
                                <span class="size-11.5 shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-s-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    Ar
                                </span>
                                <input type="number" id="input-price" name="price" class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded-e-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>
                        </div>
                        @error('price')
                            <p class="text-sm text-red-600 mt-2">
                                @foreach ($errors->get('price') as $message)
                                    {{ $message }}
                                @endforeach
                            </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="input-description"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Description
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <x-input type='textarea' name='description' rows="6" placeholder="Quelque lignes à propos du description" />
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->

                <div class="mt-5 flex justify-end gap-x-2">
                    <button type="reset"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                        Annuler
                    </button>
                    <button type="submit"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Ajouter Produit
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-layouts.app>
