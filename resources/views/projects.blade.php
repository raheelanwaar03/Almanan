@extends('layout.app')
@section('content')
    <section
        class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#fff] before:opacity-[70%]"
        style="background-image: url('assets/images/breadcrumb/bg.jpg');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block">our new project</span></div>
                        <h1
                            class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                            La Vista</h1>
                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">La Vista is a project which we introduce
                            for making your dream home</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- award wining --}}

    <section class="py-[80px] lg:py-[125px]">
        <div class="container">
            <div class="grid sm:grid-cols-12">
                <div class="col-span-12 md:col-span-4 lg:col-span-3">
                    <ul
                        class="flex flex-wrap lg:flex-col list-none items-center border-[1px] border-secondary rounded-[8px] h-full text-center px-10 py-[30px] md:py-[50] lg:py-[55px] xl:py-[60px] xl:max-w-[230px] xl:mr-0 md:mr-[20px] ">
                        <li
                            class="w-full border-b-[1px] border-[#1B2D40]/60 pb-3 mb-3 md:pb-3 md:mb-3 lg:pb-6 xl:pb-10 lg:mb-6 xl:mb-10">
                            <p>Properties you want</p>
                        </li>
                        <li
                            class="w-full border-b-[1px] border-[#1B2D40]/60 pb-3 mb-3 md:pb-3 md:mb-3 lg:pb-6 xl:pb-10 lg:mb-6 xl:mb-10">
                            <p>100% satisfaction</p>
                        </li>
                        <li class="w-full block">
                            <p>Helping staff</p>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12 md:col-span-8 lg:col-span-9 mt-10 md:mt-0">
                    <div class="p-[30px] rounded-[10px] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC]">
                        <img class="self-center mb-[15px] w-full h-full" src="assets/images/brands/brand-lg.png"
                            alt="brand logo">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-7 mt-20">
                <div class="max-w-[530px]">
                    <h4 class="font-lora text-primary text-[24px] lg:text-[36px] mb-[10px]">Overview<span
                            class="text-secondary">.</span></h4>
                    <p class="mb-12">
                        Al Mannan Builders is leading brands in the real estate industry. We are a team of professionals
                        with rich experience and strong competencies. Insightful decision-making.
                        That’s why when it comes to delivering best quality in very convenient ways, we are always number
                        one choice among end users. Find out more about our company profile and our fruitful mission, as
                        well as other services that may interest you by filling the form at the end.</p>
                    <ul
                        class="font-lora text-[18px] flex flex-wrap sm:items-center justify-between m-[-10px] flex-col sm:flex-row items-start">
                        <li class="m-[10px]">
                            <span class="text-secondary block">Phone no.</span>
                            <a href="#" class="text-primary">0304 1119333</a>
                        </li>
                        <li class="m-[10px]">
                            <span class="text-secondary block">Agent.</span>
                            <span class="text-primary">50+</span>
                        </li>
                        <li class="m-[10px]">
                            <span class="text-secondary block">Starting Price.</span>
                            <span class="text-primary"><b>270,00,000 with instullments.</b></span>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <h4 class="font-lora text-primary text-[24px] lg:text-[36px] mb-[10px]">Payment Quotation<span
                            class="text-secondary">.</span></h4>
                    <ol class="liststyle">
                        <u style="color: #B39359">
                        <b style="color: #B39359;font-size:20px">
                            <li>10 Marla Villas</li>
                            <li>Booking starting from 8%</li>
                            <li>45 months installment plan</li>
                            <li>2 Years construction warranty</li>
                            <li>25 years banking financing facilities</li>
                            <li>1st time in DHA Multan with solar system</li>
                        </b>
                    </u>
                    </ol>
                    {{-- <span class="underline font-light block text-[18px] mb-[15px]"></span> --}}
                    <h4 class="font-lora text-primary text-[24px] lg:text-[36px] mb-[10px] mt-10">Rating<span
                            class="text-secondary">.</span></h4>
                    <div class="flex flex-wrap mb-[30px]">
                        <span class="mx-[4px]">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                        <span class="mx-[4px]">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                        <span class="mx-[4px]">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                        <span class="mx-[4px]">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                        <span class="mx-[4px]">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- advertisment --}}

    <section class="popular-properties">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="flex flex-col items-center justify-center mb-[50px]">
                        <span class="text-secondary text-tiny inline-block mb-2">Advertise Brochure</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                            10 Marla La Vista Homes details<span class="text-secondary">.</span></h2>
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
                                        <img src="assets/images/ads/img3.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/ads/img2.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/ads/img.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/ads/img4.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/ads/img5.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/ads/img6.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/ads/img7.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/ads/img8.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/ads/img9.jpg" class="w-full h-full" loading="lazy"
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

    <!-- Featured Properties Start -->

    <section class="popular-properties py-[80px] lg:py-[125px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="flex flex-col items-center justify-center mb-[50px]">
                        <span class="text-secondary text-tiny inline-block mb-2">Best Choice</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                            We Provide Interior Design service's<span class="text-secondary">.</span></h2>
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
                                        <img src="assets/images/interior/slide1.png" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/interior/slide2.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/interior/06.png" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/interior/slide4.jpg" class="w-full h-full" loading="lazy"
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
                                        <img src="assets/images/interior/slide5.jpg" class="w-full h-full" loading="lazy"
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
    <!-- Featured Properties End -->
@endsection
