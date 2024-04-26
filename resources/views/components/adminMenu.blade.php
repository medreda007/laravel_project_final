@extends('layouts.index')

@section('main')
    <div class="flex flex-col items-center justify-center">
        <h1>
            All menu :
        </h1>
        <div class="min-w-[82vw] border rounded-lg border-neutral-300 p-10 flex flex-wrap justify-center gap-5 min-h-[40vh]">


            <div class="d-flex flex-column align-items-center justify-content-center ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-black menu-btn menu-btn" id="Breakfast-tab" data-bs-toggle="tab"
                            data-bs-target="#Breakfast-tab-pane" type="button" role="tab"
                            aria-controls="Breakfast-tab-pane" aria-selected="true">Breakfast</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-black menu-btn" id="Lunch-tab" data-bs-toggle="tab"
                            data-bs-target="#Lunch-tab-pane" type="button" role="tab" aria-controls="Lunch-tab-pane"
                            aria-selected="false">Lunch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-black menu-btn" id="Dinner-tab" data-bs-toggle="tab"
                            data-bs-target="#Dinner-tab-pane" type="button" role="tab" aria-controls="Dinner-tab-pane"
                            aria-selected="false">Dinner</button>
                    </li>
                </ul>
                <div class="tab-content d-flex justify-content-center" id="myTabContent">

                    <div class="tab-pane fade show active" id="Breakfast-tab-pane" role="tabpanel"
                        aria-labelledby="Breakfast-tab" tabindex="0">
                        <div class="pt-5">
                            <h2 class="text-[#C7AE6A] fw-bolder fs-1">Breakfast</h2>
                            <h6 class="opacity-50">MENU</h6>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center gap-3 p-5">
                            @foreach ($Breakfast as $breakfast)
                                <div
                                    class="bg-gray-100 rounded-2xl p-6 flex flex-col min-w-[25vw] justify-center gap-3 cursor-pointer hover:-translate-y-2 transition-all relative">
                                    
                                    <div class=" overflow-hidden mx-auto ">
                                        <img src="{{ asset('assets/image/' . $breakfast->image) }}" alt="Product 1"
                                            class="w-[200px] h-[250px] object-cover rounded-sm" />
                                    </div>
                                    <div class="text-center mt-4">
                                        <h3 class="text-lg font-extrabold text-gray-800">{{ $breakfast->name }}</h3>
                                        <p class="opacity-40 text-sm px-3 py-2 m-auto">{{ $breakfast->description }}</p>
                                        <h4 class="text-2xl text-gray-800 font-bold mt-4">${{ $breakfast->price }}</h4>
                                        <form action="{{ route('menu.edit', $breakfast->id) }}" method="POST">
                                            @csrf
                                            <button
                                                class="w-full flex items-center justify-center gap-3 mt-6 px-4 py-2.5 bg-transparent hover:text-purple-950 text-base text-[#333] border-2 font-semibold border-purple-100 hover:border-purple-950 duration-700 rounded-xl">
                                                Edit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Lunch-tab-pane" role="tabpanel" aria-labelledby="Lunch-tab"
                        tabindex="0">
                        <div class="pt-5">
                            <h2 class="text-[#C7AE6A] fw-bolder fs-1">Lunch</h2>
                            <h6 class="opacity-50">MENU</h6>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center gap-3 p-5">
                            @foreach ($Lunch as $lunch)
                                <div
                                    class="bg-gray-100 rounded-2xl p-6 flex flex-col min-w-[25vw] justify-center gap-3 cursor-pointer hover:-translate-y-2 transition-all relative">
                                    
                                    <div class=" overflow-hidden mx-auto ">
                                        <img src="{{ asset('assets/image/' . $lunch->image) }}" alt="Product 1"
                                            class="w-[200px] h-[250px] object-cover rounded-sm" />
                                    </div>
                                    <div class="text-center mt-4">
                                        <h3 class="text-lg font-extrabold text-gray-800">{{ $lunch->name }}</h3>
                                        <p class="opacity-40 text-sm px-3 py-2 m-auto">{{ $lunch->description }}</p>
                                        <h4 class="text-2xl text-gray-800 font-bold mt-4">${{ $lunch->price }}</h4>
                                        <form action="{{ route('menu.edit', $lunch->id) }}" method="POST">
                                            @csrf
                                            <button
                                                class="w-full flex items-center justify-center gap-3 mt-6 px-4 py-2.5 bg-transparent hover:text-purple-950 text-base text-[#333] border-2 font-semibold border-purple-100 hover:border-purple-950 duration-700 rounded-xl">
                                                Edit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Dinner-tab-pane" role="tabpanel" aria-labelledby="Dinner-tab"
                        tabindex="0">
                        <div class="pt-5">
                            <h2 class="text-[#C7AE6A] fw-bolder fs-2">Dinner</h2>
                            <h6 class="opacity-50">MENU</h6>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center gap-3 p-5">
                            @foreach ($Dinner as $dinner)
                                <div
                                    class="bg-gray-100 rounded-2xl p-6 flex flex-col min-w-[25vw] justify-center gap-3 cursor-pointer hover:-translate-y-2 transition-all relative">
                                    
                                    <div class=" overflow-hidden mx-auto ">
                                        <img src="{{ asset('assets/image/' . $dinner->image) }}" alt="Product 1"
                                            class="w-[200px] h-[250px] object-cover rounded-sm" />
                                    </div>
                                    <div class="text-center mt-4">
                                        <h3 class="text-lg font-extrabold text-gray-800">{{ $dinner->name }}</h3>
                                        <p class="opacity-40 text-sm px-3 py-2 m-auto">{{ $dinner->description }}</p>
                                        <h4 class="text-2xl text-gray-800 font-bold mt-4">${{ $dinner->price }}</h4>
                                        <form action="{{ route('menu.edit', $dinner->id) }}" method="POST">
                                            @csrf
                                            <button
                                                class="w-full flex items-center justify-center gap-3 mt-6 px-4 py-2.5 bg-transparent hover:text-purple-950 text-base text-[#333] border-2 font-semibold border-purple-100 hover:border-purple-950 duration-700 rounded-xl">
                                                Edit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>











        </div>
        <form action="{{ route('menu.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex gap-4 flex-col justify-around gap-x-28 ">
                <h1>
                    New menu :
                </h1>
                <input type="string" class="border" name="name" id="">
                <input type="text" class="border" name="description" id="">
                <input type="number" name="price" id="">
                <input type="text" class="border" name="category" id="">
                <input type="file" class="border" name="image" id="">
                <button type="submit">
                    Create
                </button>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </form>
    </div>
@endsection
