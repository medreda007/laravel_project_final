@extends('layouts.index')

@section('main')
    <div class="flex flex-col items-center justify-center mt-24">
        <div class="lg:w-[80vw] border rounded-lg border-neutral-300 lg:p-10 flex flex-wrap justify-center lg:gap-5 min-h-[40vh]">
            <div class="text-4xl py-3">
                <h1>
                    All dishes:
                </h1>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-black bg-transparent menu-btn menu-btn text-2xl"
                            id="Breakfast-tab" data-bs-toggle="tab" data-bs-target="#Breakfast-tab-pane" type="button"
                            role="tab" aria-controls="Breakfast-tab-pane" aria-selected="true">Breakfast</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-black menu-btn bg-transparent text-2xl" id="Lunch-tab"
                            data-bs-toggle="tab" data-bs-target="#Lunch-tab-pane" type="button" role="tab"
                            aria-controls="Lunch-tab-pane" aria-selected="false">Lunch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-black menu-btn bg-transparent text-2xl" id="Dinner-tab"
                            data-bs-toggle="tab" data-bs-target="#Dinner-tab-pane" type="button" role="tab"
                            aria-controls="Dinner-tab-pane" aria-selected="false">Dinner</button>
                    </li>
                </ul>
                <div class="lg:container">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Breakfast-tab-pane" role="tabpanel"
                            aria-labelledby="Breakfast-tab">
                            <div class="text-center py-5">
                                <h2 class="text-2xl font-bold text-purple-800">Breakfast</h2>
                                <h6 class="text-gray-600">MENU</h6>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center gap-3 p-5">
                                @foreach ($Breakfast as $breakfast)
                                    <div
                                        class="card bg-gray-100 rounded-xl p-6 flex flex-col w-80 hover:shadow-lg transition-transform transform hover:-translate-y-1">
                                        <img src="{{ asset( $breakfast->image) }}" alt="Product 1"
                                            class="card-img-top w-full h-64 object-cover rounded-t-lg" />
                                        <div class="card-body text-center mt-4">
                                            <h3 class="text-lg font-bold">{{ $breakfast->name }}</h3>
                                            <p class="text-gray-500 text-sm">{{ $breakfast->description }}</p>
                                            <h4 class="text-xl font-bold mt-2">${{ $breakfast->price }}</h4>
                                            @role('admin')
                                                <form action="{{ route('menu.edit', $breakfast->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $breakfast->name }}" placeholder="Name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" name="description" class="form-control"
                                                            value="{{ $breakfast->description }}" placeholder="Description">
                                                    </div>
                                                    <div class="mb-3">
                                                        
                                                        <input type="text" name="category" class="form-control"
                                                            value="{{ $breakfast->category }}" placeholder="category">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" name="price" class="form-control"
                                                            value="{{ $breakfast->price }}" placeholder="Price">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="file" name="image" class="form-control"
                                                            value="{{ $breakfast->image }}" placeholder="Image">
                                                    </div>
                                                    <button type="submit" class="py-2 rounded bg-purple-900 text-white w-full mt-4">
                                                        Save Changes
                                                    </button>
                                                </form>
                                                <form action="{{ route('menu.delete',$breakfast) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="py-2 rounded bg-red-500 text-white w-full mt-4">
                                                        Delete
                                                    </button>
                                                </form>
                                            @endrole
                                            @unlessrole('admin')
                                                <form action="{{ route('cart.add', $breakfast->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn nav-btn text-white mt-2 rounded-lg hover:bg-purple-950">
                                                        Add to Cart
                                                    </button>
                                                </form>
                                            @endunlessrole
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Lunch Tab -->
                        <div class="tab-pane fade" id="Lunch-tab-pane" role="tabpanel" aria-labelledby="Lunch-tab">
                            <div class="text-center py-5">
                                <h2 class="text-2xl font-bold text-purple-800">Lunch</h2>
                                <h6 class="text-gray-600">MENU</h6>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center gap-3 p-5">
                                @foreach ($Lunch as $lunch)
                                    <div
                                        class="card bg-gray-100 rounded-xl p-6 flex flex-col w-80 hover:shadow-lg transition-transform transform hover:-translate-y-1">
                                        <img src="{{ asset( $lunch->image) }}" alt="Product 1"
                                            class="card-img-top w-full h-64 object-cover rounded-t-lg" />
                                        <div class="card-body text-center mt-4">
                                            <h3 class="text-lg font-bold">{{ $lunch->name }}</h3>
                                            <p class="text-gray-500 text-sm">{{ $lunch->description }}</p>
                                            <h4 class="text-xl font-bold mt-2">${{ $lunch->price }}</h4>
                                            @role('admin')
                                                <form action="{{ route('menu.edit', $lunch->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $lunch->name }}" placeholder="Name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" name="description" class="form-control"
                                                            value="{{ $lunch->description }}" placeholder="Description">
                                                    </div>
                                                    <div class="mb-3">
                                                        
                                                        <input type="text" name="category" class="form-control"
                                                            value="{{ $lunch->category }}" placeholder="category">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" name="price" class="form-control"
                                                            value="{{ $lunch->price }}" placeholder="Price">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="file" name="image" class="form-control"
                                                            value="{{ $lunch->image }}" placeholder="Image">
                                                    </div>
                                                    <button type="submit" class="py-2 rounded bg-purple-900 text-white w-full mt-4">
                                                        Save Changes
                                                    </button>
                                                </form>
                                                <form action="{{ route('menu.delete',$lunch) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="py-2 rounded bg-red-500 text-white w-full mt-4">
                                                        Delete
                                                    </button>
                                                </form>
                                            @endrole
                                            @unlessrole('admin')
                                                <form action="{{ route('cart.add', $lunch->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn nav-btn text-white mt-2 rounded-lg hover:bg-purple-950">
                                                        Add to Cart
                                                    </button>
                                                </form>
                                            @endunlessrole
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Dinner Tab -->
                        <div class="tab-pane fade" id="Dinner-tab-pane" role="tabpanel" aria-labelledby="Dinner-tab">
                            <div class="text-center py-5">
                                <h2 class="text-2xl font-bold text-purple-800">Dinner</h2>
                                <h6 class="text-gray-600">MENU</h6>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center gap-3 p-5">
                                @foreach ($Dinner as $dinner)
                                    <div
                                        class="card bg-gray-100 rounded-xl p-6 flex flex-col w-80 hover:shadow-lg transition-transform transform hover:-translate-y-1">
                                        <img src="{{ asset( $dinner->image) }}" alt="Product 1"
                                            class="card-img-top w-full h-64 object-cover rounded-t-lg" />
                                        <div class="card-body text-center mt-4">
                                            <h3 class="text-lg font-bold">{{ $dinner->name }}</h3>
                                            <p class="text-gray-500 text-sm">{{ $dinner->description }}</p>
                                            <h4 class="text-xl font-bold mt-2">${{ $dinner->price }}</h4>
                                            @role('admin')
                                                <form action="{{ route('menu.edit', $dinner->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $dinner->name }}" placeholder="Name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" name="description" class="form-control"
                                                            value="{{ $dinner->description }}" placeholder="Description">
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        
                                                        <input type="text" name="category" class="form-control"
                                                            value="{{ $dinner->category }}" placeholder="category">
                                                    </div>

                                                    <div class="mb-3">
                                                        <input type="number" name="price" class="form-control"
                                                            value="{{ $dinner->price }}" placeholder="Price">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="file" name="image" class="form-control"
                                                            value="{{ $dinner->image }}" placeholder="Image">
                                                    </div>
                                                    <button type="submit" class="py-2 rounded bg-purple-900 text-white w-full mt-4">
                                                        Save Changes
                                                    </button>
                                                </form>
                                                <form action="{{ route('menu.delete',$dinner) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="py-2 rounded bg-red-500 text-white w-full mt-4">
                                                        Delete
                                                    </button>
                                                </form>
                                            @endrole
                                            @unlessrole('admin')
                                                <form action="{{ route('cart.add', $dinner->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn nav-btn text-white mt-2 rounded-lg hover:bg-purple-950">
                                                        Add to Cart
                                                    </button>
                                                </form>
                                            @endunlessrole
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @role('admin')
    <form action="{{ route('menu.create') }}" method="POST" enctype="multipart/form-data" class="mx-auto max-w-md lg:w-[40vw] p-4 bg-white rounded-md shadow-md">
        @csrf
        <h1 class="text-xl font-bold mb-4">New Menu:</h1>
    
        <!-- Input for Name -->
        <input
            type="text"
            class="border rounded-md p-2 w-full focus:outline-none focus:border-purple-500 transition duration-200 mb-3"
            name="name"
            id="name"
            placeholder="Name"
            required
        >
    
        <!-- Input for Description -->
        <textarea
            class="border rounded-md p-2 w-full focus:outline-none focus:border-purple-500 transition duration-200 mb-3"
            name="description"
            id="description"
            placeholder="Description"
            rows="3"
            required
        ></textarea>
    
        <!-- Input for Price -->
        <input
            type="number"
            class="border rounded-md p-2 w-full focus:outline-none focus:border-purple-500 transition duration-200 mb-3"
            name="price"
            id="price"
            placeholder="Price"
            required
        >
    
        <!-- Input for Category -->
        <input
            type="text"
            class="border rounded-md p-2 w-full focus:outline-none focus:border-purple-500 transition duration-200 mb-3"
            name="category"
            id="category"
            placeholder="Category"
            required
        >
    
        <!-- Input for Image -->
        <input
            type="file"
            class="border rounded-md p-2 w-full focus:outline-none focus:border-purple-500 transition duration-200 mb-3"
            name="image"
            id="image"
            required
        >
    
        <!-- Create Button -->
        <button
            type="submit"
            class="bg-purple-800 text-white py-2 px-4 rounded-md hover:bg-purple-700 transition duration-200 mt-2 w-full"
        >
            Create
        </button>
    
        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mt-4 bg-red-200 p-4 rounded-md">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    
    @endrole
    </div>
@endsection
