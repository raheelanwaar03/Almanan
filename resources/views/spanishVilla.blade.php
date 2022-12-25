@extends('layout.app')
@section('content')
    <section
        class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#fff] before:opacity-[70%]"
        style="background-image: url('assets/images/hero/spanishVilla.jpeg');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[650px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block"></span></div>
                        <h1
                            class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                            Spanish Villa
                        </h1>

                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                            We will help you to built your dream house.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="popular-properties py-[80px] lg:py-[120px]">
        <div class="container">

            <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                    <img src="assets/images/hero/spanishVilla.jpeg" class="w-auto h-auto" loading="lazy"
                        alt="Elite Garden Resedence." width="770" height="465">
                    <div class="mt-[55px] mb-[35px]">
                        <h2
                            class="font-lora leading-tight text-[22px] md:text-[28px] lg:text-[32px] text-primary mb-[10px] font-medium">
                            EXCEPTIONAL INVENTORY WITH A CONVENIENT PAYMENT PLAN.</h2>

                        <p class="max-w-[767px]">The project features masterfully planned 4-bedroom and 5-bedroom
                            double-storey villas covering an area of 3,100 sq. ft. each. Those interested in buying property
                            in Al Mannan Spanish Villas can choose between standard units, corner units, park-facing units,
                            and corner + park-facing units.

                            Moreover, the booking for these residences starts with a 25% down payment with 15% to be paid on
                            possession. The remaining amount is divided into 45 monthly instalments. The developer also
                            offers balloon payment options to further facilitate the buyers.

                            Most importantly, those investing in Al Mannan Spanish Villas in DHA Multan can avail 10%
                            discount on full upfront payment and a 5% discount on half payment.</p>
                    </div>

                    <div class="spanishVideo">
                        <video autoplay muted loop id="myVideo">
                            <source src="assets/images/video/spanish.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>

                    <blockquote class="italic text-secondary leading-[2] mb-[25px]">
                        “We will Provide you which we admited.”
                    </blockquote>
                    <h1 class="underline"><b>AN UNPARALLELED LOCATION IN DHA MULTAN</b></h1>
                    <p>
                        The strategic location of Al Mannan Spanish Villas at the intersection of different sectors in DHA
                        Multan is one of its most attractive features.

                        The housing society is situated in a park-facing corner in B-I Sector, just a short walk from Clock
                        Tower. Moreover, it is connected to Jinnah Avenue, which means those living in this posh
                        neighbourhood will be connected to all major parts of the city.
                        Let’s look at the location highlights of the project to learn more about its address.
                        <br>
                        <ul class="liststyle">
                            <li>Direct access to Jinnah Avenue</li>
                            <li>Proximity to Rumanza Golf Community</li>
                            <li>Surrounded by DHA Multan Sector A, B-2, H, K, G, F, and more</li>
                            <li>360 Zoo: 3-minute drive</li>
                            <li>BZU Multan: 10-minute drive</li>
                            <li>Golf Course Rumanza: 4-minute drive</li>
                            <li>Shah Rukn-e-Alam Gate: 10-minute drive</li>
                            <li>Multan city centre: 15-minute drive</li>
                            <li>Multan Airport: 20-minute drive</li>
                        </ul>
                    </p>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                    <aside class="mb-[-40px]">
                        <div class="mb-[40px]">
                            <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">How
                                to Book Your Property<span class="text-secondary">?</span></h3>
                            <p>
                                If you have any questions about investing in Al Mannan Spanish Villas or want to learn more
                                about its payment plan, please fill out the green-and-white form attached to this blog so
                                our representatives can contact you.
                                In the meantime, if you have any suggestions or feedback for us, feel free to drop us a
                                message at builderssalmannan@gmail.com.
                                Also, for the latest updates on Al Mannan Spanish Villas in DHA Multan, stay connected to
                                Zameen Blog – the best real estate blog in Pakistan.
                            </p>
                        </div>

                        <div class="mb-[40px] flex flex-col">
                            <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">
                                A SECURE PROJECT PROMISING HIGH RETURNS ON INVESTMENT<span class="text-secondary">.</span>
                            </h3>
                            <p>Buying property in Al Mannan Spanish Villas could be a profitable decision for those planning
                                to expand their real estate investment portfolio while enjoying substantial capital gains.
                                It is a venture of Al Mannan Builders, a reliable construction and development firm that has
                                built a reputation for delivering successful projects.
                                Furthermore, the gated community has been approved by all relevant authorities, making it a
                                100% safe investment option. The development work is also underway at a rapid pace and is
                                expected to reach its final stages as per the given timeline.
                                While the competitive prices and flexible payment plans are among the top features drawing
                                the attention of domestic and overseas buyers, its promising investment prospects have also
                                made it a roaring success. In addition to that, Zameen.com – the top property enterprise in
                                Pakistan – is the official sales and marketing partner of the housing scheme.</p>
                        </div>

                        <div class="mb-[40px] flex flex-col">
                            <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">
                                A TASTEFULLY CURATED SELECTION OF AMENITIES<span class="text-secondary">.</span></h3>
                            <p>
                                Envisioned to provide its residents luxury beyond comparison, the project is equipped with
                                every modern-day comfort and convenience one could possibly dream of. Here are some of the
                                most remarkable features of Al Mannan Spanish Villas in DHA Multan that you should know
                                about:

                                Guarded gates and fool-proof security
                                Aesthetically appealing entrance
                                Lush green open spaces
                                120-feet and 80-feet wide carpeted roads
                                Beautifully designed rooftops
                                Dedicated parking spaces
                                Availability of solar energy system from the developer
                                Availability of a fire-fighting system from the developer
                            </p>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </section>
@endsection
