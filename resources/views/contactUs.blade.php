@extends('layout.app')
@section('content')
<section class="bg-no-repeat bg-center bg-cover bg-[#E9F1FF] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Contact Information</span></div>
                    <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                        Contact Us
                    </h1>

                    <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                        Feel free to contact us. We are here to help you.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- contact form start -->
<section class="py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid col-span-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">

            <div class="flex hover:drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] group">
                <!-- <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/map.png" width="40" height="55" loading="lazy" alt="image icon"> -->
                <div class="flex-1">
                    <h4 class="font-lora group-hover:text-secondary group-hover:transition-all leading-none text-[28px] text-primary mb-[10px]">Address <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]">House No 68 A Model town Road Multan</p>
                </div>
            </div>

            <div class="flex hover:drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] group">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/phone.png" width="46" height="46" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-lora group-hover:text-secondary group-hover:transition-all leading-none text-[28px] text-primary mb-[10px]">Call us <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]">0304 1119333</p>
                </div>
            </div>

            <div class="flex hover:drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] xl:pl-[65px] group">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/mail.png" width="46" height="52" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-lora group-hover:text-secondary group-hover:transition-all leading-none text-[28px] text-primary mb-[10px]">Email us <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]">
                        <a href="#" class="hover:text-secondary">admin@almannanbuilders.com</a>
                        <a href="#" class="hover:text-secondary">info@almannanbuilders.com</a>
                    </p>
                </div>
            </div>

        </div>


    </div>
</section>
@endsection
