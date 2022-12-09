@extends('layout.app')
@section('content')
    <!-- Hero section start -->
    <section class="hero-section bg-white">
        <div class="hero-slider2 overflow-hidden">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- swiper-slide start -->
                    <div class="swiper-slide bg-no-repeat bg-left-bottom bg-sky-100 z-[1] relative before:absolute before:w-full before:h-full before:inset-0 before:content-[''] before:bg-[#fff] before:opacity-[75%] before:z-[-1] py-[80px] lg:py-[125px]"
                        style="background-image: url('assets/images/hero/property2.jpg');">
                        <div class="container">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <div class="slider-content">
                                        <div style="margin-top:50px;">
                                        </div>
                                        <h1
                                            class="font-lora text-white text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title">
                                            <span>SPANISH VILLAS</span>
                                        </h1>

                                        <p class="text-base text-white font-light text">
                                            Join us for the grand release of DHA Multan's newest community of 10 marla,
                                            Spanish Villa. <br> Its exclusive design and stunning location will redefine
                                            your
                                            idea of luxury living. <br> We've got best designs at the best prices.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-10" style="margin-top:100px">
                                    <a href="{{ url('Contact-Us') }}"
                                        class="text-white text-base underline capitalize hover:text-secondary">Contact
                                        us</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide end-->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide bg-no-repeat bg-left-bottom bg-sky-100 z-[1] relative before:absolute before:w-full before:h-full before:inset-0 before:content-[''] before:bg-[#fff] before:opacity-[75%] before:z-[-1] py-[80px] lg:py-[125px]"
                        style="background-image: url('assets/images/hero/property1.jpg');">
                        <div class="container">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <div class="slider-content">
                                        <div style="margin-top:50px;">
                                        </div>
                                        <h1
                                            class="font-lora text-white text-[26px] sm:text-[60px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title">
                                            <span>MODERN VILLAS</span>
                                        </h1>

                                        <p class="text-base text-white font-light text">
                                            We design and build exclusive 10 Marla Modern Villas with lavish quality and
                                            best designs in DHA Multan. <br> Get the best of accommodation, relaxation and
                                            property investment made possible at one place. <br> Enjoy the luxury of endless
                                            opportunities with the new construction Project of Al Mannan Builders.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-span-12 xl:col-span-10" style="margin-top:100px">
                                    <a href="{{ url('Contact-Us') }}"
                                        class="text-white text-base underline capitalize hover:text-secondary">Contact
                                        us</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide end-->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination home-pagination-six hidden lg:flex flex-wrap flex-col items-end"></div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->
    <!-- Popular Properties start -->
    <section class="popular-properties py-[80px] lg:py-[125px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="flex flex-col items-center justify-center mb-[50px]">
                        <span class="text-secondary text-tiny inline-block mb-2">Best Choice</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                            Popular Properties<span class="text-secondary">.</span></h2>
                    </div>
                </div>
            </div>

            <div class="properties-slider">
                <div class="swiper  -mx-[15px] -my-[60px] px-[15px] py-[60px]">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/properties/property4.jpg" class="w-full h-full"
                                            loading="lazy" width="370" height="266" alt="Sinomen Studio Palace.">
                                    </a>
                                </div>

                                <div class="py-[20px] px-[20px] text-left">
                                    <h3><a href="#"
                                            class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary hover:text-secondary transition-all font-medium"></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/properties/property1.jpg" class="w-full h-full"
                                            loading="lazy" width="370" height="266" alt="Sinomen Studio Palace.">
                                    </a>
                                </div>

                                <div class="py-[20px] px-[20px] text-left">
                                    <h3><a href="#"
                                            class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary hover:text-secondary transition-all font-medium"></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/properties/property3.jpg" class="w-full h-full"
                                            loading="lazy" width="370" height="266" alt="Sinomen Studio Palace.">
                                    </a>
                                </div>

                                <div class="py-[20px] px-[20px] text-left">
                                    <h3><a href="#"
                                            class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary hover:text-secondary transition-all font-medium"></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide end-->
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </section>
    <!-- Popular Properties end -->

    <!-- About Us Sectin Start -->
    <section class="about-section pt-10">
        <div class="container">
            <div class="grid grid-cols-12 gap-6 items-center">
                <div class="col-span-12 lg:col-span-6">
                    <span class="text-secondary text-tiny inline-block mb-2">Why Choose us</span>
                    <h2
                        class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-5 lg:mb-16 font-medium max-w-[500px]">
                        We Provide Latest Properties for our valuable Clients<span class="text-secondary">.</span>
                    </h2>
                    <div class="scene" data-relative-input="true">
                        <img data-depth="0.1" src="assets/images/about/about1.png" class="" loading="lazy"
                            width="729" height="663" alt="about Image">
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 lg:pl-[70px]">
                    <p class="max-w-[448px] ">Our team is passionate about combining integrity with a dynamic
                        approach to business and ensures comprehensive service is tailored for every client's
                        specific requirements, both locally and internationally. We are committed to understanding
                        clients' needs so that they can provide confidential guidance and expertise on every aspect
                        of buying and selling property.</p>

                    <div class="-mb-10 mt-12 xl:mt-[70px] 2xl:mt-[100px]">
                        <div class="flex flex-wrap mb-5 lg:mb-10">
                            <img src="assets/images/icon/doller.png" class="self-start mr-5" loading="lazy"
                                width="50" height="50" alt="about Image">
                            <div class="flex-1">
                                <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Budget
                                    Friendly</h3>
                                <p class="max-w-[315px]">We will provide you service in your budget</p>
                            </div>

                        </div>
                        <div class="flex flex-wrap mb-5 lg:mb-10">
                            <img src="assets/images/icon/location.png" class="self-start mr-5" loading="lazy"
                                width="50" height="50" alt="about Image">
                            <div class="flex-1">
                                <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Prime
                                    Location</h3>
                                <p class="max-w-[315px]">We will provide you your dream loction</p>
                            </div>

                        </div>
                        <div class="flex flex-wrap mb-5 lg:mb-10">
                            <img src="assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy"
                                width="50" height="50" alt="about Image">
                            <div class="flex-1">
                                <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">
                                    Trusted by
                                    Thousand</h3>
                                <p class="max-w-[315px]">We have thousand of happy client in our 25 years of experience</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About Us Sectin End -->

    <!-- Featured Properties Start -->
    <section class="popular-properties py-[80px] lg:py-[125px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12" style="display: flex;justify-content:center;align-items:center;">
                    <div class="flex flex-col items-center justify-center mb-[50px]">
                        <span class="text-secondary text-tiny inline-block mb-2">Newly Added</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                            Our New Project<span class="text-secondary">.</span></h2>
                    </div>
                    <div style="margin-left: 20px">
                        <img src="{{ asset('assets/images/logo/LaVista.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="properties-slider">
                <div class="swiper  -mx-[15px] -my-[60px] px-[15px] py-[60px]">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/LaVista/img2.jpg" class="w-full h-full" loading="lazy"
                                            width="370" height="266" alt="Sinomen Studio Palace.">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/LaVista/img3.jpg" class="w-full h-full" loading="lazy"
                                            width="370" height="266" alt="Sinomen Studio Palace.">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/LaVista/img6.jpg" class="w-full h-full" loading="lazy"
                                            width="370" height="266" alt="Sinomen Studio Palace.">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/LaVista/img8.jpg" class="w-full h-full" loading="lazy"
                                            width="370" height="266" alt="Sinomen Studio Palace.">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/LaVista/img4.jpg" class="w-full h-full" loading="lazy"
                                            width="370" height="266" alt="Sinomen Studio Palace.">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide end-->
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </section>

    {{-- video section --}}
    <section class="video-section" style="margin-top:20px;margin-bottom:120px">
        <div class="container">
            <div
                class="grid grid-cols-12 gap-3 sm:gap-[30px] items-center bg-primary z-[-2] lg:pl-[60px] lg:pr-0 lg:py-0 sm:pl-10 sm:pr-10 pl-5 pr-5 py-5 sm:py-12 rounded-[7px]">
                <div class="col-span-12 lg:col-span-6 relative">
                    <div class="mb-5 lg:mb-0 max-w-[450px]">
                        <span class="text-secondary text-tiny inline-block mb-2">Take a video tour</span>
                        <h2
                            class="font-lora text-white text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl mb-[10px] font-medium">
                            Watch the video for taking your decision easily<span class="text-secondary">.</span>
                        </h2>
                        <a href="#" class="flex flex-wrap items-center text-secondary text-tiny mt-[20px]">View
                            all
                            <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 text-center">
                    <div class="relative rounded-[24px] lg:pt-[45px] lg:pr-[45px] z-[1] lg:inline-block">
                        <div class="">
                            <img src="assets/images/video/shape-3.png" class="absolute top-[30px] right-[30px] z-[-1]"
                                loading="lazy" width="50" height="60" alt="shape image">
                            <img src="assets/images/video/shape-2.png"
                                class="absolute left-1/2 hidden lg:block lg:bottom-5 lg:-left-[160px]" loading="lazy"
                                width="128" height="56" alt="Shape">
                        </div>
                        <div class="relative lg:-mb-16">
                            <div class="scene" data-relative-input="true">
                                <img data-depth="0.1" src="assets/images/video/video.png"
                                    class="rounded-[24px] max-w-full" loading="lazy" width="507" height="349"
                                    alt="video image">
                            </div>
                            <a href="https://youtu.be/E-AIG_CIzOE"
                                class="play-button bg-white text-white hover:text-primary absolute left-0 right-0 mx-auto top-1/2 -translate-y-1/2 hover:scale-105 hover:bg-primary w-[55px] h-[55px] flex
            flex-wrap z-[1] items-center justify-center opacity-100 shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] transition-all rounded-full group

            before:block before:absolute  before:bg-white before:opacity-80 before:shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] hover:before:bg-primary hover:before:opacity-80 before:w-[70px] before:h-[70px] before:rounded-full before:z-[-1]
            "
                                aria-label="play button">
                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="stroke-primary group-hover:stroke-white"
                                        d="M1.63861 10.764V6.70324C1.63861 1.66145 5.20893 -0.403178 9.57772 2.11772L13.1024 4.14812L16.6271 6.17853C20.9959 8.69942 20.9959 12.8287 16.6271 15.3496L13.1024 17.38L9.57772 19.4104C5.20893 21.9313 1.63861 19.8666 1.63861 14.8249V10.764Z"
                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-row items-baseline gap-2 mt-10 leading-[1]">
                <span class="text-secondary text-[16px] sm:text-[20px] font-lora font-normal">Have a
                    question?</span>
                <a class="text-primary text-[22px] sm:text-[28px] font-lora font-medium" href="#">
                    0304 1119333</a>
            </div>
        </div>
    </section>
    <!-- Video Section End -->
    <section class="team-section my-5 pb-[80px] lg:pb-[125px] overflow-hidden">
        <div class="container">
            <div class="grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-x-5 md:gap-x-[30px] mb-[-30px]">
                <div class="xl:pr-[20px] self-center mb-[30px] sm:col-span-3 lg:col-span-1 max-w-[500px]">
                    <span class="text-secondary text-tiny capitalize inline-block mb-[15px]">Our Agents</span>
                    <h2
                        class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-[15px] font-medium">
                        Our Team<span class="text-secondary">.</span></h2>

                    <p>As the CEO of Al Mannan Builders, I am well aware of the excellent work we provide on sites.
                        Our customers tell us about our high-quality service and timely project completion,
                        reassuring us of their trust in our company and in our crew.</p>
                </div>
                <div class="xl:pr-[20px] self-center mb-[30px] sm:col-span-3 lg:col-span-1 max-w-[500px]">
                    <div style="margin-top:10px"></div>
                    <h2
                        class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-[15px] font-medium">
                        Our Mission<span class="text-secondary">.</span></h2>

                    <p>Our mission is to provide the consumer with the highest level of service of any Real Estate company
                        thereby ensuring that properties are sold or leased in an exemplary manner."Choise of thousands"</p>
                </div>
                <!-- single team start -->
                <div class="text-center group mb-[30px]">
                    <div class="relative rounded-[6px_6px_0px_0px]">
                        <a href="#">
                            <img src="assets/images/team/person1.jpg" class="w-auto h-auto block mx-auto" loading="lazy"
                                width="215" height="310" alt="Amelia Margaret">
                        </a>
                        <ul class="flex flex-col absolute w-full top-[30px] left-0 overflow-hidden">
                            <li
                                class="translate-x-[0px] group-hover:translate-x-[30px] opacity-0 group-hover:opacity-100 transition-all duration-300 mb-[15px]">
                                <a href="#" aria-label="svg"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                            <li
                                class="translate-x-[0px] group-hover:translate-x-[30px] opacity-0 group-hover:opacity-100 transition-all duration-500 mb-[15px]">
                                <a href="#" aria-label="svg"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                            <li
                                class="translate-x-[0px] group-hover:translate-x-[30px] opacity-0 group-hover:opacity-100 transition-all duration-700 last:mb-0 mb-[15px]">
                                <a href="#" aria-label="svg"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="bg-[#FFFDFC] z-[1] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-3 md:px-[15px] py-[20px] border-b-[6px] border-primary transition-all duration-500 before:transition-all before:duration-300 group-hover:border-secondary relative">
                        <h3><a href="#"
                                class="font-lora font-normal text-base text-primary group-hover:text-secondary">RANA
                                MANNAN</a></h3>
                        <p class="font-normal text-[14px] leading-none capitalize mt-[5px] group-hover:text-body">
                            Chairman</p>
                    </div>
                </div>
                <div class="text-center group mb-[30px]">
                    <div class="relative rounded-[6px_6px_0px_0px]">
                        <a href="#">
                            <img src="assets/images/team/person.jpg" class="w-auto h-auto block mx-auto" loading="lazy"
                                width="215" height="310" alt="Stephen Kelvin">
                        </a>
                        <ul class="flex flex-col absolute w-full top-[30px] left-0 overflow-hidden">
                            <li
                                class="translate-x-[0px] group-hover:translate-x-[30px] opacity-0 group-hover:opacity-100 transition-all duration-300 mb-[15px]">
                                <a href="#" aria-label="svg"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                            <li
                                class="translate-x-[0px] group-hover:translate-x-[30px] opacity-0 group-hover:opacity-100 transition-all duration-500 mb-[15px]">
                                <a href="#" aria-label="svg"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                            <li
                                class="translate-x-[0px] group-hover:translate-x-[30px] opacity-0 group-hover:opacity-100 transition-all duration-700 last:mb-0 mb-[15px]">
                                <a href="#" aria-label="svg"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="bg-[#FFFDFC] z-[1] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-3 md:px-[15px] py-[20px] border-b-[6px] border-primary transition-all duration-500 before:transition-all before:duration-300 group-hover:border-secondary relative">
                        <h3><a href="#"
                                class="font-lora font-normal text-base text-primary group-hover:text-secondary">RANA
                                RAYYAN</a></h3>
                        <p class="font-normal text-[14px] leading-none capitalize mt-[5px] group-hover:text-body">
                            CEO</p>
                    </div>
                </div>
                <!-- single team end-->
            </div>
        </div>
    </section>
    <!-- Team Section End-->

    <!-- Blog Section Start  -->
    <section class="properties-grids-section pt-[30px] pb-[30px] lg:py-[30px]">
        <div class="container">

            <div class="grid grid-cols-12">
                <div class="col-span-12"> <span class="text-secondary text-tiny inline-block mb-2">Our
                        Gallery</span></div>
                <div class="col-span-12">
                    <div class="flex flex-col sm:flex-row items-start justify-between mb-[50px]">
                        <div>

                            <h2
                                class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                                Visit our Photo Gallery<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-x-[15px] lg:gap-x-[30px] mb-[-30px]">
                <div class="mb-[30px] col-span-12 sm:col-span-4">
                    <a class="gallery-image" href="assets/images/gallery/large/01.png">
                        <img class="object-cover w-full h-full rounded-[8px]" src="assets/images/gallery/01.png"
                            alt="gallery image" loading="lazy" width="370" height="281">
                    </a>
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-5">
                    <a class="gallery-image" href="assets/images/gallery/large/02.png">
                        <img class="object-cover w-full h-full rounded-[8px]" src="assets/images/gallery/02.png"
                            alt="gallery image" loading="lazy" width="470" height="281">
                    </a>
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-3">
                    <a class="gallery-image" href="assets/images/gallery/large/03.png">
                        <img class="object-cover w-full h-full rounded-[8px]" src="assets/images/gallery/03.png"
                            alt="gallery image" loading="lazy" width="272" height="281">
                    </a>
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-4">
                    <a class="gallery-image" href="assets/images/gallery/large/04.png">
                        <img class="object-cover w-full h-full rounded-[8px]" src="assets/images/gallery/04.png"
                            alt="gallery image" loading="lazy" width="370" height="281">
                    </a>
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-3">
                    <a class="gallery-image" href="assets/images/gallery/large/05.png">
                        <img class="object-cover w-full h-full rounded-[8px]" src="assets/images/gallery/05.png"
                            alt="gallery image" loading="lazy" width="270" height="281">
                    </a>
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-5">
                    <a class="gallery-image" href="assets/images/gallery/large/06.png">
                        <img class="object-cover w-full h-full rounded-[8px]" src="assets/images/gallery/06.png"
                            alt="gallery image" loading="lazy" width="470" height="281">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End  -->
    <hr>

    <section class="testimonial-section mb-5 pt-[80px] lg:pt-[125px] bg-center bg-no-repeat bg-white z-10">
        <div class="container testimonial-carousel-two relative">
            <div class="scene dots-shape absolute left-0">
                <img data-depth="0.4" class="z-[1]" src="assets/images/testimonial/dots.png" width="106"
                    height="129" loading="lazy" alt="shape">
            </div>
            <div class="grid items-center grid-cols-12 gap-x-[30px]">
                <div class="col-span-12 relative">
                    <div class="swiper rounded-[30px] pb-[40px] md:pb-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- shape and images -->

                                <div class="pl-[50px] xl:pl-[150px]">
                                    <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                        <img src="assets/images/testimonial/person2.png"
                                            class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy"
                                            width="402" height="505" alt="Oliver Stephen">
                                        <img class="absolute left-[0px] top-0 z-[1]"
                                            src="assets/images/testimonial/persone-pattern.png" width="400"
                                            height="500" loading="lazy" alt="shape">
                                    </div>
                                </div>
                                <div
                                    class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                    <div
                                        class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                        <div class="relative">
                                            <span class="block absolute right-[0px] top-[0px]">

                                                <svg class="ml-auto mb-[4px]" width="78" height="57"
                                                    viewBox="0 0 78 57" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.08">
                                                        <path
                                                            d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z"
                                                            fill="#01614E" />
                                                    </g>
                                                </svg>


                                            </span>

                                            <span
                                                class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Reviews</span>
                                            <h2
                                                class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                Reviews from our <br class="hidden xl:block" /> happy Clients<span
                                                    class="text-secondary">.</span>
                                            </h2>
                                            <p class="max-w-[480px]">
                                                Almannan buliders doing a great job to find the perfect home. It’s very easy
                                                for
                                                every one to buy, sell or rent property we belive they continure
                                                their great service and appriciate them recomended.

                                            </p>
                                        </div>

                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-lora text-[18px] leading-none capitalize text-secondary">Ali
                                                    Haider</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- shape and images -->

                                <div class="pl-[50px] xl:pl-[150px]">
                                    <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                        <img src="assets/images/testimonial/person4.png"
                                            class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy"
                                            width="402" height="505" alt="Sun Francisco">
                                        <img class="absolute left-[0px] top-0 z-[1]"
                                            src="assets/images/testimonial/persone-pattern.png" width="400"
                                            height="500" loading="lazy" alt="shape">
                                    </div>
                                </div>
                                <div
                                    class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                    <div
                                        class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                        <div class="relative">
                                            <span class="block absolute right-[0px] top-[0px]">

                                                <svg class="ml-auto mb-[4px]" width="78" height="57"
                                                    viewBox="0 0 78 57" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.08">
                                                        <path
                                                            d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z"
                                                            fill="#01614E" />
                                                    </g>
                                                </svg>


                                            </span>

                                            <span
                                                class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Reviews</span>
                                            <h2
                                                class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                Reviews from our <br class="hidden xl:block" /> happy Clients<span
                                                    class="text-secondary">.</span>
                                            </h2>
                                            <p class="max-w-[480px]">
                                                Almannan buliders doing a great job to find the perfect home. It’s very easy
                                                for
                                                every one to buy, sell or rent property we belive they continure
                                                their great service and appriciate them recomended.

                                            </p>
                                        </div>

                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-lora text-[18px] leading-none capitalize text-secondary">Umer</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- shape and images -->

                                <div class="pl-[50px] xl:pl-[150px]">
                                    <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                        <img src="assets/images/testimonial/person2.png"
                                            class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy"
                                            width="402" height="505" alt="Oliver Stephen">
                                        <img class="absolute left-[0px] top-0 z-[1]"
                                            src="assets/images/testimonial/persone-pattern.png" width="400"
                                            height="500" loading="lazy" alt="shape">
                                    </div>
                                </div>


                                <div
                                    class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                    <div
                                        class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                        <div class="relative">
                                            <span class="block absolute right-[0px] top-[0px]">

                                                <svg class="ml-auto mb-[4px]" width="78" height="57"
                                                    viewBox="0 0 78 57" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.08">
                                                        <path
                                                            d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z"
                                                            fill="#01614E" />
                                                    </g>
                                                </svg>


                                            </span>

                                            <span
                                                class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Reviews</span>
                                            <h2
                                                class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                Reviews from our <br class="hidden xl:block" /> happy Clients<span
                                                    class="text-secondary">.</span>
                                            </h2>
                                            <p class="max-w-[480px]">
                                                Bary do a great job to find the perfect home. It’s very easy for
                                                every one to buy, sell or rent property we belive they continure
                                                their great service and appriciate them recomended.

                                            </p>
                                        </div>

                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-lora text-[18px] leading-none capitalize text-secondary">Ali
                                                    Haider</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#B39359" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="testimonial-pagination hidden sm:block">
                            <div
                                class="swiper-button-prev w-[36px] h-[36px] rounded-full bg-secondary xl:bg-primary  text-white hover:bg-secondary top-auto bottom-[85px] left-[30px]">
                            </div>
                            <div
                                class="swiper-button-next w-[36px] h-[36px] rounded-full bg-secondary xl:bg-primary  text-white hover:bg-secondary top-auto bottom-[85px] left-[85px]">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- News Letter section start -->
    {{-- <section class="py-[80px] lg:p-[90px] bg-primary relative">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="col-span">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full lg:w-auto">
                            <h3
                                class="font-lora text-white text-[24px] sm:text-[30px] xl:text-[36px] leading-[1.277] mb-[10px]">
                                Are you a Home Owner?</h3>
                            <p class="text-secondary leading-[1.5] tracking-[0.03em] mb-10">Put your email address
                                and get listed.</p>
                            <form id="mc-form" action="#" class="relative w-full">
                                <input id="mc-email"
                                    class="font-light text-white leading-[1.75] opacity-100 border border-secondary w-full lg:w-[395px] xl:w-[495px] h-[60px] rounded-[10px] py-[15px] pl-[15px] pr-[15px] sm:pr-[135px] focus:border-white focus:outline-none border-opacity-60 placeholder:text-[#E2E2E2] bg-transparent"
                                    type="text" placeholder="Enter your email here...">
                                <button id="mc-submit" type="submit"
                                    class="text-white font-medium text-[16px] leading-none tracking-[0.02em] bg-secondary py-[17px] px-[20px] mt-5 sm:mt-0 rounded-[10px] hover:bg-white hover:text-primary transition-all sm:absolute sm:right-[4px] sm:top-1/2 sm:-translate-y-1/2">Get
                                    Listed</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-green-400"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-red-600"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                        <div class="w-full hidden lg:block lg:w-auto mt-5 lg:mt-0">
                            <div class="relative mt-10 md:mt-0 lg:absolute lg:right-0 lg:bottom-0">
                                <img class="hero_image lg:max-w-[550px] xl:max-w-[650px] 2xl:max-w-[714px]"
                                    src="assets/images/newsletter/bg-1.png" width="866" height="879"
                                    alt="hero image">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
@endsection
