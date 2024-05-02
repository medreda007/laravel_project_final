@extends('layouts.index2')


@section('content')
    {{-- caroussel && menu --}}


    <div class="">
        <section class="showcase elegant-dining">

            <video width="640" height="400" muted loop autoplay>
                <source src="{{ asset('assets/video/videoplayback.webm') }}" type="video/webm">
                Your browser does not support the video tag.
            </video>

            <div class="overlay"></div>
            <div class="text font-serif">
                <h2 class="">Indulge in Culinary Delights</h2>
                <p>Experience an exquisite fusion of flavors crafted with the finest ingredients. Our dedicated chefs curate
                    a menu that tantalizes the taste buds and delights the senses.</p>
                    <div class="flex flex-col w-fit">
                        <a href="{{ route('menu.index') }}">Explore Our Menu</a>
                        <a class="w-fit" href="{{ route('reservation.index') }}">book a table</a>
                    </div>
            </div>

            <ul class="social social-white">
                <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png" alt="Twitter"></a></li>
                <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png" alt="Instagram"></a></li>
            </ul>
        </section>

    </div>

    <section class="py-12">
        <div class="flex flex-col items-center justify-center gap-2 pb-10">
            <h6 class="  ">- Random Dishes -</h6>
            <p class="py-2 grad-border border-t-2 border-b-2 border-black text-4xl text-center">FROM OUR MENU</p>
        </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 lg:gap-8 gap-12 justify-items-center">
            @for ($i = 0; $i < 6; $i++)
                <div class="flex flex-col lg:flex-row justify-center items-center">
                    <!-- width set to 16rem or 64 Tailwind units -->
                    <div class="rounded-full w-36 h-36 lg:mr-4">
                        <img class="rounded-s-full rounded-ee-full object-cover w-full h-full hover:rounded-e-full hover:rounded-s-none hover:rounded-bl-full delay-200 transition-all"
                            src="{{ asset( $Menu[$i]['image']) }}" alt="">
                    </div>
                    <div class="text-center lg:text-left mt-4 lg:mt-0 lg:w-[26rem]">
                        <h1 class="font-semibold text-lg">{{ $Menu[$i]['name'] }} <span
                                class="opacity-50 font-thin">.....................</span> <span
                                class="font-normal text-[#C7AE6A]">{{ $Menu[$i]['price'] }} DHS</span></h1>
                        <p>{{ $Menu[$i]['description'] }}</p>
                    </div>
                </div>
            @endfor
        </div>


        </div>
    </section>




    {{-- tables --}}


    <section class="py-12 font-serif text-[#333]">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col items-center justify-center gap-2 pb-10">
                <h6 class="  ">- Tables -</h6>
                <p class="py-2 grad-border border-t-2 border-b-2 border-black text-4xl text-center">OUR PANORAMIC VIEWS</p>
            </div>
            <div class="grid font-serif md:grid-cols-3 md:gap-6 max-md:gap-10 max-md:justify-center text-center  py-6 pb-16">
                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg  overflow-hidden mx-auto mt-4">
                    <img src="{{ asset('assets/image/restaurant-cabestan-interieur.jpg') }}" class="w-full rounded-lg" />
                    <div class="px-4 my-6 text-center ">
                        <h3 class="text-lg font-semibold">The ocean view</h3>
                        <p class="mt-2 text-sm text-gray-400">Eden Haul features stunning ocean views that enhance your dining experience. Enjoy delicious meals while enjoying the serene beauty of the waves crashing on the beach.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg  overflow-hidden mx-auto mt-4">
                    <img src="{{ asset('assets/image/Rick’s-Cafe-in-Casablanca-4-480x320.jpg') }}"
                        class="w-full rounded-lg" />
                    <div class="px-4 my-6 text-center">
                        <h3 class="text-lg font-semibold">The main haul</h3>
                        <p class="mt-2 text-sm text-gray-400">Eden Haul's main dining hall is a stunning space that combines elegance with a cozy atmosphere. The hall's design blends classic aesthetics with a warm, welcoming touch, ensuring every visit is a memorable experience.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg  overflow-hidden mx-auto mt-4">
                    <img class="max-h-[235px] w-full rounded-lg"
                        src="{{ asset('assets/image/qui-nguyen-Zrp9b3PMIy8-unsplash.jpg') }}" class="w-full rounded-lg" />
                    <div class="px-4 my-6 text-center">
                        <h3 class="text-lg font-semibold">The bar</h3>
                        <p class="mt-2 text-sm text-gray-400">Eden Haul's bar offers a curated selection of cocktails and fine wines, perfect for enjoying a drink while listning to the music. The bar's ambiance is both inviting and sophisticated, providing the ideal setting for a relaxing evening.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- how --}}

    <section>
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col items-center justify-center gap-2 pb-10">
                <h6 class="">- How -</h6>
                <p class="py-2 grad-border border-t-2 border-b-2 border-black text-4xl text-center"><span class="grad-text">EDEN HAUL</span> SERVES YOU</p>
            </div>
            <div class="grid md:grid-cols-3 md:gap-6 max-md:gap-10 max-md:justify-center text-center  py-6 pb-16">
                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg  overflow-hidden mx-auto mt-4">
                    <img src="{{ asset('assets/image/delivery.jpg') }}" class="w-full rounded-lg" />
                    <div class="px-4 my-6 text-center">
                        <h3 class="text-lg font-semibold">Online Order</h3>
                        <p>Enjoy our tasteful warm plates in peace you and your familly with a fast shipping service.</p>
                    </div>
                    <a class="h-16 flex justify-center items-center" href="{{ route('menu.index') }}">
                        <button class="nav-btn rounded-lg p-2 ">Order</button>
                    </a>
                </div>
                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg  overflow-hidden mx-auto mt-4">
                    <img src="{{ asset('assets/image/rservation.jpg') }}" class="w-full rounded-lg h-[22rem]" />
                    <div class="px-4 my-6 text-center">
                        <h3 class="text-lg font-semibold">Online Reservation</h3>
                        <p>Reserve your table online to enjoy the unique experience to the fullest </p>
                    </div>
                    <a class="h-16 flex justify-center items-center" href="{{ route('reservation.index') }}">
                        <button class="nav-btn rounded-lg p-2 ">Reserve</button>
                    </a>
                </div>

                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg  overflow-hidden mx-auto mt-4">
                    <img class="h-[22rem] w-full rounded-lg" src="{{ asset('assets/image/musicev.jpg') }}" />
                    <div class="px-4 my-6 text-center">
                        <h3 class="text-lg font-semibold">Events</h3>
                        <p>Join our community to get the chance to attend music and cinematic events and to win exclusive
                            coupons.</p>
                    </div>
                    <a class="h-16 flex justify-center items-center" href="{{ route('register') }}">
                        <button class="nav-btn rounded-lg p-2 mb-10">Register</button>
                    </a>
                </div>

            </div>
        </div>
    </section>


    {{-- testemonials --}}
    <!-- &&section7 -->
    @include('components.chefsection')


    <!-- vist us-->
    <section class="pt-5">
        <div class="">
            <div class="flex flex-col items-center justify-center gap-2 pb-10">
                <p class="py-2 grad-border border-t-2 border-b-2 border-black text-4xl text-center">VIST US<span class="grad-text"></span></p>
            </div>
            <div class="flex justify-center p-14">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d26584.07876835446!2d-7.620405!3d33.605049!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d287c1b84dd1%3A0x3976a100331c6da4!2sRick&#39;s%20Caf%C3%A9!5e0!3m2!1sen!2sma!4v1714329490848!5m2!1sen!2sma" class=" w-[90vw] h-[50vh] rounded-md" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>
    </section>

@endsection
