<!DOCTYPE html>
<html class="no-js" lang="en">
<!--
    This Website is developed By Raheel Anwaar
    For Details Contact me
    Email:info@raheelanwaar.com
    Phone:0316 7007156
    website:raheelanwaar.com
 -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bery-Real Estate Listing Template</title>
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="Bery-Real Estate Listing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="font-karla text-body text-tiny">
    <div class="overflow-hidden">
        <!-- for Navigation -->
        <!-- Header start -->

        <header id="sticky-header" class="absolute left-0 top-[15px] lg:top-[30px] xl:top-[40px] w-full z-10">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-wrap items-center justify-between">
                            <a href="index.html" class="block">
                                <img class="w-full h-full white-logo" src="assets/images/logo/Almanan1.png"
                                    loading="lazy" width="99" height="46" alt="brand logo">
                                <img class="w-full h-full hidden dark-logo" src="assets/images/logo/Almanan1.png"
                                    loading="lazy" width="99" height="46" alt="brand logo">
                            </a>
                            <nav class="flex flex-wrap items-center">
                                <ul
                                    class="hidden lg:flex flex-wrap items-center font-lora text-[16px] xl:text-[18px] leading-none text-black">
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('/') }}"
                                            class="sticky-dark transition-all text-white hover:text-secondary">Home</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('About-Us') }}"
                                            class="sticky-dark transition-all text-white hover:text-secondary">About</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="{{ url('Contact-Us') }}"
                                            class="sticky-dark transition-all text-white hover:text-secondary">Contact</a>

                                    </li>
                                </ul>

                                <ul class="flex flex-wrap items-center">
                                    <li class="sm:mr-5 xl:mr-[20px] relative group"><a href="#">
                                            <img src="assets/images/user/avater.png" loading="lazy" width="62"
                                                height="62" alt="avater">
                                        </a>
                                    </li>
                                    <li class="ml-2 sm:ml-5 lg:hidden">
                                        <a href="#offcanvas-mobile-menu"
                                            class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                            <svg width="24" height="24" class="fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- offcanvas-overlay start -->
        <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
        <!-- offcanvas-overlay end -->
        <!-- offcanvas-mobile-menu start -->
        <div id="offcanvas-mobile-menu"
            class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

            <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
                <!-- close button start -->
                <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0 z-[1]"
                    aria-label="offcanvas">x</button>
                <!-- close button end -->

                <!-- offcanvas-menu start -->

                <nav class="offcanvas-menu mr-[20px]">
                    <ul>
                        <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                            <a href="{{ url('/') }}"
                                class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ url('About-Us') }}"
                                class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">About</a>
                        </li>
                    </ul>
                    </li>
                    <li class="relative block border-b-primary border-b"><a href="{{ url('Contact-Us') }}"
                            class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact</a>
                    </li>
                    </ul>
                </nav>
                <!-- offcanvas-menu end -->
            </div>
        </div>
