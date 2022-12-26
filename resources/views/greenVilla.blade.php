@extends('layout.app')
@section('content')
    <section
        class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]"
        style="background-image: url('assets/images/properties/garder.jpg');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[650px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block"></span></div>
                        <h1
                            class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                            Mannan Town
                        </h1>

                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                            Mannan Town is one of our famous project in Multan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="popular-properties py-[80px] lg:py-[120px]">
    </section>
@endsection
