<x-layouts.app :title="__('Nouvelle Entreprise')">
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto"><!-- Card -->
        <div class="bg-white rounded-xl shadow-xs p-4 sm:p-7 dark:bg-neutral-800">
            <div class="mb-8 text-center">
                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                    Nouveau Entreprise
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Une entreprise
                </p>
            </div>

            <form action="{{ route('admin.entreprises.store') }}" method="post">
                @csrf
                <!-- Grid -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                    <!-- End Col -->
                    <div class="sm:col-span-3">
                        <label for="input-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Nom
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <x-input type='text' name='name' />
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="input-email"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Email
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <x-input type='email' name='email' />
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <div class="inline-block">
                            <label for="input-phone"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Phone
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">
                                (Optionel)
                            </span>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <x-input type='text' name='phone' />
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="input-activity"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Activité
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <x-input type='text' name='activity' />
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
                        Ajouter entreprise
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-layouts.app>
