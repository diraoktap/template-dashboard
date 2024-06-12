<div class="container mx-auto relative mt-5 h-[500px]">
    <!-- Slider -->
    <div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true,
    "speed": "10000",
    "isInfiniteLoop": true
  }'
        class="relative h-full">
        <div class="hs-carousel h-full relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
            <div
                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                <div class="hs-carousel-slide">
                    <div class="h-full bg-cover bg-center p-6 relative"
                        style="background-image: url('{{ asset('assets/images/background/aircraft/all.jpg') }}')">
                        <div class="absolute bottom-10">
                            <p class="font-bold text-5xl text-justify text-white">All Aircraft</p>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="h-full bg-cover bg-center p-6 relative"
                        style="background-image: url('{{ asset('assets/images/background/aircraft/219.jpg') }}')">
                        <div class="absolute bottom-10">
                            <p class="font-bold text-5xl text-justify text-white">N219 - Nurtanio</p>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="h-full bg-cover bg-center p-6 relative"
                        style="background-image: url('{{ asset('assets/images/background/aircraft/212.jpg') }}')">
                        <div class="absolute bottom-10">
                            <p class="font-bold text-5xl text-justify text-white">NC212</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
            <span
                class="hs-carousel-active:bg-gray-100 hs-carousel-active:border-gray-100 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-gray-100 dark:hs-carousel-active:border-gray-100"></span>
            <span
                class="hs-carousel-active:bg-gray-100 hs-carousel-active:border-gray-100 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-gray-100 dark:hs-carousel-active:border-gray-100"></span>
            <span
                class="hs-carousel-active:bg-gray-100 hs-carousel-active:border-gray-100 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-gray-100 dark:hs-carousel-active:border-gray-100"></span>
        </div>
    </div>
</div>
