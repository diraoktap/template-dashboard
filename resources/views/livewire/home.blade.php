<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    var cont = 0;

    function loopSlider() {
        var xx = setInterval(function() {
            switch (cont) {
                case 0: {
                    $("#slider-1").fadeOut(800);
                    $("#slider-2").delay(800).fadeIn(800);
                    // $("#sButton1").removeClass("bg-purple-800");
                    // $("#sButton2").addClass("bg-purple-800");
                    cont = 1;
                    break;
                }
                case 1: {
                    $("#slider-2").fadeOut(800);
                    $("#slider-1").delay(800).fadeIn(800);
                    // $("#sButton2").removeClass("bg-purple-800");
                    // $("#sButton1").addClass("bg-purple-800");
                    cont = 0;
                    break;
                }
            }
        }, 3000);
    }

    function reinitLoop(time) {
        clearInterval(xx);
        setTimeout(loopSlider(), time);
    }

    // function sliderButton1() {

    //     $("#slider-2").fadeOut(400);
    //     $("#slider-1").delay(400).fadeIn(400);
    //     $("#sButton2").removeClass("bg-purple-800");
    //     $("#sButton1").addClass("bg-purple-800");
    //     reinitLoop(4000);
    //     cont = 0
    // }

    // function sliderButton2() {
    //     $("#slider-1").fadeOut(400);
    //     $("#slider-2").delay(400).fadeIn(400);
    //     $("#sButton1").removeClass("bg-purple-800");
    //     $("#sButton2").addClass("bg-purple-800");
    //     reinitLoop(4000);
    //     cont = 1
    // }

    $(window).ready(function() {
        $("#slider-2").hide();
        // $("#sButton1").addClass("bg-purple-800");
        loopSlider();
    });
</script>
<div class="min-h-full">
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
                    <img src={{ asset('assets/images/logos/defend.png') }} alt="Logo PTDI" class="w-40 h-14">
                    <img src={{ asset('assets/images/logos/ptdi.png') }} alt="Logo PTDI" class=" w-12">
                </div>
            </div>
            </nav>
        </div>
    </header>

    {{-- slider --}}
    <div class="container mx-auto h-[500px] relative mt-5">
        <div id="slider-1" class="h-full">
            <div class="bg-cover bg-center h-full text-white p-10 object-fill relative"
                style="background-image: url('{{ asset('assets/images/background/aircraft/all.jpg') }}')">
                {{-- <div
                    class="w-[500px] flex flex-col justify-end space-y-5 bg-gray-50/50 backdrop-blur p-5 absolute bottom-10">
                    <p class="font-bold text-3xl">Aircraft</p>
                    <p class="text-base leading-none">PT Dirgantara Indonesia produces various
                        types
                        of
                        aircraft to
                        fulfill the needs of civil airlines, military operators and specific missions.</p>
                </div> --}}
            </div>
        </div>

        <div id="slider-2" class="h-full">
            <div class="bg-cover bg-center h-full text-white p-10 object-fill "
                style="background-image: url('{{ asset('assets/images/background/aircraft/219.jpg') }}')">
                {{-- <div
                    class="w-[500px] flex flex-col justify-end space-y-5 bg-gray-50/50 backdrop-blur p-5 absolute bottom-10">
                    <p class="font-bold text-3xl">N219 - Nurtanio</p>
                    <p class="w-96 text-base leading-none">N219 Nurtanio is the suitable mode of transportation to open,
                        improve people economy growth, and to maintain defense and security in isolated areas.</p>
                </div> --}}
            </div>
        </div>
        {{-- <div class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 w-4 pb-2 "></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 w-4 p-2"></button>
    </div> --}}
        {{-- slider --}}

        <main class="mt-10">
            <div class="container mx-auto">
                <div class="grid grid-cols-4 gap-5">
                    <div>
                        <iframe class="w-full h-full"
                            src="http://10.1.94.149:3000/d-solo/MxqCLP0mk1/vmware-vsphere-hosts?orgId=1&refresh=10s&var-inter=%24__auto_interval_inter&var-vcenter=10.212.1.61&var-clustername=All&var-esxi=vmw-dc05.indonesian-aerospace.com&var-VM=All&var-datastore=All&var-esxiarm=All&from=1718067973406&to=1718089573406&theme=light&panelId=93"></iframe>
                    </div>
                    <div class="relative overflow-hidden  border border-dashed border-gray-400 opacity-75">
                        <svg class="h-full w-full stroke-gray-900/10" fill="none">
                            <defs>
                                <pattern id="pattern-d09edaee-fc6a-4f25-aca5-bf9f5f77e14a" x="0" y="0" width="10"
                                    height="10" patternUnits="userSpaceOnUse">
                                    <path d="M-3 13 15-5M-5 5l18-18M-1 21 17 3"></path>
                                </pattern>
                            </defs>
                            <rect stroke="none" fill="url(#pattern-d09edaee-fc6a-4f25-aca5-bf9f5f77e14a)"
                                width="100%" height="100%"></rect>
                        </svg>
                    </div>
                    <div class="relative overflow-hidden  border border-dashed border-gray-400 opacity-75">
                        <svg class="h-full w-full stroke-gray-900/10" fill="none">
                            <defs>
                                <pattern id="pattern-d09edaee-fc6a-4f25-aca5-bf9f5f77e14a" x="0" y="0" width="10"
                                    height="10" patternUnits="userSpaceOnUse">
                                    <path d="M-3 13 15-5M-5 5l18-18M-1 21 17 3"></path>
                                </pattern>
                            </defs>
                            <rect stroke="none" fill="url(#pattern-d09edaee-fc6a-4f25-aca5-bf9f5f77e14a)"
                                width="100%" height="100%"></rect>
                        </svg>
                    </div>
                    <div class="relative overflow-hidden  border border-dashed border-gray-400 opacity-75">
                        <svg class="h-full w-full stroke-gray-900/10" fill="none">
                            <defs>
                                <pattern id="pattern-d09edaee-fc6a-4f25-aca5-bf9f5f77e14a" x="0" y="0" width="10"
                                    height="10" patternUnits="userSpaceOnUse">
                                    <path d="M-3 13 15-5M-5 5l18-18M-1 21 17 3"></path>
                                </pattern>
                            </defs>
                            <rect stroke="none" fill="url(#pattern-d09edaee-fc6a-4f25-aca5-bf9f5f77e14a)"
                                width="100%" height="100%"></rect>
                        </svg>
                    </div>
                </div>

            </div>
        </main>
    </div>
