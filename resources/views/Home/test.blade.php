@extends('layouts.index2')


@section('content')

    {{-- caroussel && menu --}}

    <div class="">
        @include('components.carouselMenu')
    </div>


    {{-- tables --}}


    <div class="my-6 font-[sans-serif] text-[#333]">
        <div class="max-w-6xl mx-auto">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-2xl font-extrabold">Tables.</h2>
                <p class="text-sm mt-2 leading-relaxed">Veniam proident aute magna anim excepteur et ex consectetur velit
                    ullamco veniam minim aute sit.</p>
            </div>
            <div class="grid md:grid-cols-3 md:gap-6 max-md:gap-10 max-md:justify-center text-center mt-12">

                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                    <img src="https://readymadeui.com/cardImg.webp" class="w-full rounded-lg" />
                    <div class="px-4 my-6 text-center">
                        <h3 class="text-lg font-semibold">Heading</h3>
                        <p class="mt-2 text-sm text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            auctor auctor
                            arcu,
                            at fermentum dui. Maecenas</p>
                        <button type="button"
                            class="px-6 py-2 w-full mt-4 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">View</button>
                    </div>
                </div>

                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                    <img src="https://readymadeui.com/cardImg.webp" class="w-full rounded-lg" />
                    <div class="px-4 my-6 text-center">
                        <h3 class="text-lg font-semibold">Heading</h3>
                        <p class="mt-2 text-sm text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            auctor auctor
                            arcu,
                            at fermentum dui. Maecenas</p>
                        <button type="button"
                            class="px-6 py-2 w-full mt-4 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">View</button>
                    </div>
                </div>

                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-full max-w-sm rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                    <img src="https://readymadeui.com/cardImg.webp" class="w-full rounded-lg" />
                    <div class="px-4 my-6 text-center">
                        <h3 class="text-lg font-semibold">Heading</h3>
                        <p class="mt-2 text-sm text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            auctor auctor
                            arcu,
                            at fermentum dui. Maecenas</p>
                        <button type="button"
                            class="px-6 py-2 w-full mt-4 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">View</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- chefs --}}

    <div class="my-6 font-[sans-serif] text-[#333]">
        <div class="max-w-6xl mx-auto">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-2xl font-extrabold">Chefs.</h2>
                <p class="text-sm mt-2 leading-relaxed">Veniam proident aute magna anim excepteur et ex consectetur velit
                    ullamco veniam minim aute sit.</p>
            </div>
            <div class="grid md:grid-cols-3 md:gap-6 max-md:gap-10 max-md:justify-center text-center mt-12">

                <div class="max-w-[350px] h-auto p-4 rounded-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                    <div class="flex flex-col items-center">
                        <img src="https://readymadeui.com/team-1.webp" class="w-80 object-contain object-top rounded-md" />
                        <div class="mt-4">
                            <h4 class="text-sm font-extrabold">John Doe</h4>
                            <p class="text-xs text-gray-400 font-extrabold mt-1">CEO, Company</p>
                        </div>
                        <div class="flex justify-center space-x-1 mt-4">
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-sm leading-relaxed">The service was amazing. I never had to wait that long for my
                            food. The staff was friendly and attentive, and the delivery was impressively prompt.</p>
                    </div>
                </div>

                <div class="max-w-[350px] h-auto p-4 rounded-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                    <div class="flex flex-col items-center">
                        <img src="https://readymadeui.com/team-2.webp" class="w-80 object-contain object-top rounded-md" />
                        <div class="mt-4">
                            <h4 class="text-sm font-extrabold">Mark Adair</h4>
                            <p class="text-xs text-gray-400 font-extrabold mt-1">CEO, Company</p>
                        </div>
                        <div class="flex justify-center space-x-1 mt-4">
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-sm leading-relaxed">The service was amazing. I never had to wait that long for my
                            food. The staff was friendly and attentive, and the delivery was impressively prompt.</p>
                    </div>
                </div>

                <div class="max-w-[350px] h-auto p-4 rounded-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                    <div class="flex flex-col items-center">
                        <img src="https://readymadeui.com/team-4.webp" class="w-80 object-contain object-top rounded-md" />
                        <div class="mt-4">
                            <h4 class="text-sm font-extrabold">Simon Konecki</h4>
                            <p class="text-xs text-gray-400 font-extrabold mt-1">CEO, Company</p>
                        </div>
                        <div class="flex justify-center space-x-1 mt-4">
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-sm leading-relaxed">The service was amazing. I never had to wait that long for my
                            food. The staff was friendly and attentive, and the delivery was impressively prompt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
