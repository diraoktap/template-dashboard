<header>
    <div class="container mx-auto">
        <div class="relative flex justify-between items-center">
            <div class="flex justify-start items-center divide-x divide-gray-300 gap-5 p-5">
                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] ">
                    <button type="button"
                        class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-neutral-400 dark:hover:text-neutral-500">
                        <img src={{ asset('assets/images/icons/circled-menu.png') }} alt="icon menu">
                    </button>

                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 sm:mt-3 top-full start-0 min-w-60 bg-white sm:shadow-md dark:bg-neutral-800 before:absolute">
                        <div class="grid grid-cols-2">
                            <div class="col-span-1">
                                <div class="flex flex-col bg-gray-50 p-6 dark:bg-neutral-700 ">
                                    <span
                                        class="text-xl font-semibold uppercase text-gray-800 dark:text-neutral-200">Sales</span>

                                    <a class="mt-4 group" href="{{ url('/sales') }}">
                                        <div class="aspect-w-16 aspect-h-9">
                                            <img class="w-full h-40 object-cover "
                                                src="{{ asset('assets/images/background/aircraft/all.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                        <div class="mt-2">
                                            <p class="text-gray-800 dark:text-neutral-200">PT Dirgantara
                                                Indonesia produces various types of aircraft to fulfill the
                                                needs of civil airlines, military operators and specific
                                                missions</p>
                                            <p
                                                class="mt-3 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-400 dark:hover:text-blue-500">
                                                Learn more
                                                <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m9 18 6-6-6-6" />
                                                </svg>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="flex flex-col bg-gray-50 p-6 dark:bg-neutral-700 ">
                                    <span
                                        class="text-xl font-semibold uppercase text-gray-800 dark:text-neutral-200">Project</span>

                                    <a class="mt-4 group" href="#">
                                        <div class="aspect-w-16 aspect-h-9">
                                            <img class="w-full h-40 object-cover "
                                                src="{{ asset('assets/images/background/aircraft/all.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                        <div class="mt-2">
                                            <p class="text-gray-800 dark:text-neutral-200">PT Dirgantara
                                                Indonesia produces various types of aircraft to fulfill the
                                                needs of civil airlines, military operators and specific
                                                missions</p>
                                            <p
                                                class="mt-3 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-400 dark:hover:text-blue-500">
                                                Learn more
                                                <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m9 18 6-6-6-6" />
                                                </svg>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-5">
                    <img src={{ asset('assets/images/logos/bumn-indonesia.png') }} class="w-28" alt="Logo BUMN">
                </div>
            </div>

            <div class="flex gap-5">
                <img src={{ asset('assets/images/logos/defend.png') }} alt="Logo PTDI" class="w-40 h-10">
                <img src={{ asset('assets/images/logos/ptdi.png') }} alt="Logo PTDI" class=" w-12">
            </div>
        </div>
        </nav>
    </div>
</header>
