@extends('layout.app')
@section('content')
    <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block">Our Video Gallery</span></div>
                        <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                            All About Us
                        </h1>

                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                            Its been easy for you to understand about us after watching these videos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- Blog Section Start  -->
    <section class="blog-section py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[40px]">
                <div class="post-item">
                    <a href="#" class="block overflow-hidden rounded-[6px] mb-[35px]">
                        <video autoplay loop muted id="myVideo">
                            <source src="assets/images/ModernVillas.mp4" type="video/mp4" id="ModernVillas"  controls="controls">
                            Your browser does not support HTML5 video.
                        </video>
                    </a>
                    <div>
                        <h3><a href="#" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">All about Almannan Builders.</a></h3>
                        <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                    </div>
                </div>
                <div class="post-item">
                    <a href="#" class="block overflow-hidden rounded-[6px] mb-[35px]">
                        <video autoplay loop muted id="myVideo">
                            <source src="assets/images/video/4.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </a>
                    <div>
                        <h3><a href="#" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Our work with DHA Multan.</a></h3>
                        <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                    </div>
                </div>
                <div class="post-item">
                    <a href="#" class="block overflow-hidden rounded-[6px] mb-[35px]">
                        <video autoplay loop muted id="myVideo">
                            <source src="assets/images/video/Al Mannan builders (1).mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </a>
                    <div>
                        <h3><a href="#" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Our Work.</a></h3>
                        <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                    </div>
                </div>
                <div class="post-item">
                    <a href="#" class="block overflow-hidden rounded-[6px] mb-[35px]">
                        <video autoplay loop muted id="myVideo">
                            <source src="assets/images/video/almannanbuilders.com.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </a>
                    <div>
                        <h3><a href="#" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">The Home Buying Process: A Comprehensive Guide.</a></h3>
                        <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                    </div>
                </div>
                <div class="post-item">
                    <a href="#" class="block overflow-hidden rounded-[6px] mb-[35px]">
                        <video autoplay loop muted id="myVideo">
                            <source src="assets/images/video/Navy Modern Company Profile Presentation (1).mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </a>
                    <div>
                        <h3><a href="#" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Navy Modern Company Profile Presentation.</a></h3>
                        <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End  -->

@endsection
