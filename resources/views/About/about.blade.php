@extends('layouts.index2')


@section('content')
    <section class="pt-16">
        <div class="h-[55vh] flex justify-center items-center text-white text-5xl"
            style=" background-image: url('{{ asset('assets/image/about-us.jpg') }}'); background-repeat: no-repeat; background-size: cover; background-position:center;">
            <h1 class="h-full w-full bg-black bg-opacity-70 flex justify-center items-center">ABOUT US</h1>
        </div>
    </section>
    <section class="lg:flex py-9">
        <div class="lg:w-1/2 flex items-center justify-center">
            <img src="{{ asset('assets/image/story.jpg') }}" class="lg:w-[40vw] h-full object-contain rounded" alt="">
        </div>
        <div class="lg:w-1/2 px-3">

            <h1 class="text-[32px] py-4">Casablanca's Eden Found: <span class="grad-text">Eden</span> Haul</h1>
            <p class="py-4">
                Eden Haul, the name whispered on the Casablanca breeze, beckons you like a siren's song. Once a dream, this
                oceanfront haven has become a reality, a sanctuary sculpted from the very soul of Casablanca.
            </p>
            <p>
                Escape to Casablanca's newest gem. Gaze upon the endless Atlantic as classical notes mingle with
                sultry jazz. Plush seating and ocean breezes create a symphony of serenity. Savor fresh-caught delights and
                international flavors with a Casablanca twist. Unwind by the fireplace or find a cozy corner for intimate
                moments. Eden Haul – where Casablanca's soul meets the rhythm of the ocean.
            </p>
        </div>
    </section>

    <section class="pt-24">
        <div class="h-[55vh] flex justify-center items-center text-white "
            style=" background-image: url('{{ asset('assets/image/music-bg.jpg') }}'); background-repeat: no-repeat; background-size: cover; background-position:center;">
            <div
                class="lg:h-fit h-[75%] w-fit py-10 bg-white bg-opacity-90 flex text-center flex-col text-black justify-center items-center ">
                <h1 class="text-3xl p-5 text-opacity-20">MUSIC AT <span class="grad-text">EDEN</span></h1>
                <p class="lg:w-[50vw] lg:px-16">Music is an integral part of the Eden Haul experience, enhancing the
                    atmosphere and transporting guests
                    to heaven. Issam Chabaa's piano performances and jazz sessions enrich
                    Rick's Café's atmosphere, harmonizing with elegant interiors and making music a vital part of the
                    overall experience.</p>
            </div>
        </div>
    </section>

    <section class="pb-24">
        <div class="px-4 pt-10 sm:px-10">
            <div class=" max-w-7xl mx-auto p-24">
                <div class="mb-16 max-w-2xl text-center mx-auto">
                    <h2 class="py-2 grad-border border-t-2 border-b-2 border-black text-4xl text-center">Our Features</h2>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 max-md:max-w-lg mx-auto gap-8">
                    <div class="sm:p-6 p-4 flex bg-white rounded-md border shadow-[0_14px_40px_-11px_rgba(93,96,127,0.2)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-12 h-12 mr-6 bg-blue-50 p-3 rounded-md shrink-0" viewBox="0 0 32 32">
                            <path
                                d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z"
                                data-original="#000000" />
                            <path d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z"
                                data-original="#000000" />
                        </svg>
                        <div>
                            <h3 class="text-xl font-extrabold mb-2">Customization</h3>
                            <p>Your health and taste buds are our priority. We tailor our dishes to your dietary needs, ensuring every bite is a delicious adventure.</p>
                        </div>
                    </div>
                    <div class="sm:p-6 p-4 flex bg-white rounded-md border">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-12 h-12 mr-6 bg-blue-50 p-3 rounded-md shrink-0" viewBox="0 0 682.667 682.667">
                            <defs>
                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                    <path d="M0 512h512V0H0Z" data-original="#000000" />
                                </clipPath>
                            </defs>
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="40" clip-path="url(#a)"
                                transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                <path
                                    d="M256 492 60 410.623v-98.925C60 183.674 137.469 68.38 256 20c118.53 48.38 196 163.674 196 291.698v98.925z"
                                    data-original="#000000" />
                                <path d="M178 271.894 233.894 216 334 316.105" data-original="#000000" />
                            </g>
                        </svg>
                        <div>
                            <h3 class="text-xl font-extrabold mb-2">Warm Hospitality:</h3>
                            <p>
                                Our friendly staff is passionate about making your visit unforgettable, ensuring a smooth and delightful dining experience.                           </p>
                        </div>
                    </div>
                    <div class="sm:p-6 p-4 flex bg-white rounded-md border">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-12 h-12 mr-6 bg-blue-50 p-3 rounded-md shrink-0" viewBox="0 0 512.001 512.001">
                            <path
                                d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z"
                                data-original="#000000" />
                        </svg>
                        <div>
                            <h3 class="text-xl font-extrabold mb-2">Fresh And Unique</h3>
                            <p>Fresh from Morocco. At Eden Haul, we use locally sourced ingredients to create a menu that's
                                both international and infused with Casablanca's soul.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
