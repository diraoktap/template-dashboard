<main class="pt-5 pb-10">
    <div class="container mx-auto">
        {{-- Section: FILTER --}}
        <section class="mb-5" wire:ignore>
            <div class="flex items-center justify-between mb-5" wire:ignore>
                <h1 class="text-xl fw-bold text-Poppins-SemiBold ">Dashboard Sales</h1>
                <button type="button"
                    class="hs-collapse-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg px-3 py-2 duration-500 disabled:opacity-50 disabled:pointer-events-none text-gray-600 hover:text-blue-700"
                    id="hs-basic-collapse" data-hs-collapse="#hs-basic-collapse-heading">
                    Filter
                    <svg class="hs-collapse-open:rotate-180 flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </div>

            <div id="hs-basic-collapse-heading" class="hs-collapse hidden w-full transition-[height] duration-300"
                aria-labelledby="hs-basic-collapse">
                <div class="grid grid-cols-2 gap-5" wire:ignore>
                    <div class="col-span-1 space-y-2">
                        <label for="" class="fw-bold text-Poppins-Medium">Tahun</label>
                        <!-- Select Year -->
                        <select wire:model.change="selectYear"
                            data-hs-select='{
                                "placeholder": "Select option...",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400",
                                "dropdownClasses": "shadow-2xl mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                            }'
                            class="hidden">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2014">2014</option>
                        </select>
                        <!-- End Select Year -->
                    </div>
                    <div class="col-span-1 space-y-2">
                        <label for="" class="fw-bold text-Poppins-Medium">Bulan</label>
                        <!-- Select Month -->
                        <select wire:model.change="selectMonth"
                            data-hs-select='{
                                "placeholder": "Select option...",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400",
                                "dropdownClasses": "shadow-2xl mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                            }'
                            class="hidden">
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <!-- End Select Month -->
                    </div>
                </div>
            </div>
        </section>
        {{-- Section: FILTER --}}

        <div class="grid grid-cols-4 gap-5">
            <div class="col-span-1 h-[400px] grid grid-rows-4 gap-5">
                <div class="row-span-1 rounded-lg border border-dashed border-gray-300 relative">
                    <iframe class="rounded-lg w-full h-full"
                        src="http://10.30.85.99:3000/d-solo/fdobzqj6w9vk0e/dashboard-sales?orgId=1&var-Tahun={{ $selectYear }}&var-Month={{ $selectMonth }}&from=1718037152890&to=1718080352890&panelId=10"></iframe>
                </div>
                <div class="row-span-3 rounded-lg border border-dashed border-gray-300 relative">
                    <iframe class="rounded-lg w-full h-full"
                        src="http://10.30.85.99:3000/d-solo/fdobzqj6w9vk0e/dashboard-sales?orgId=1&var-Tahun={{ $selectYear }}&var-Month={{ $selectMonth }}&from=1718037152890&to=1718080352890&theme=light&panelId=3"></iframe>
                </div>
            </div>
            <div class="col-span-1 rounded-lg border border-dashed border-gray-300 relative">
                <iframe class="rounded-lg w-full h-full border-none"
                    src="http://10.30.85.99:3000/d-solo/fdobzqj6w9vk0e/dashboard-sales?orgId=1&var-Tahun={{ $selectYear }}&var-Month={{ $selectMonth }}&from=1718037152890&to=1718080352890&theme=light&panelId=2"></iframe>

            </div>
            <div class="col-span-2 rounded-lg border border-dashed border-gray-300 relative">
                <iframe class="rounded-lg w-full h-full"
                    src="http://10.30.85.99:3000/d-solo/fdobzqj6w9vk0e/dashboard-sales?orgId=1&var-Tahun={{ $selectYear }}&var-Month={{ $selectMonth }}&from=1718037152890&to=1718080352890&theme=light&panelId=5"></iframe>
            </div>
            <div class="col-span-2 h-[300px] rounded-lg border border-dashed border-gray-300 relative">
                <iframe class="rounded-lg w-full h-full"
                    src="http://10.30.85.99:3000/d-solo/fdobzqj6w9vk0e/dashboard-sales?orgId=1&var-Tahun={{ $selectYear }}&var-Month={{ $selectMonth }}&from=1718037152890&to=1718080352890&theme=light&panelId=6"></iframe>
            </div>
            <div class="col-span-2 h-[300px] rounded-lg border border-dashed border-gray-300 relative">
                <iframe class="rounded-lg w-full h-full"
                    src="http://10.30.85.99:3000/d-solo/fdobzqj6w9vk0e/dashboard-sales?orgId=1&var-Tahun={{ $selectYear }}&var-Month={{ $selectMonth }}&from=1718037152890&to=1718080352890&theme=light&panelId=7"></iframe>
            </div>

            {{-- <div class="col-span-4">
                <iframe src="http://10.30.85.99:3000/dashboard/snapshot/yrhhQ1bsDnTiWeSZpZULOWqmYzmOs2E3"
                    class="w-full h-[700px]" frameborder="0"></iframe>
            </div> --}}
        </div>
    </div>
</main>
