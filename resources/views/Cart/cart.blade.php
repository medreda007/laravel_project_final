@extends('layouts.index2')

@section('content')
    <section class="mt-20 py-8">

        <h2 class="text-2xl font-bold mb-4 text-center">My Shopping Cart</h2>

        <div class="container mx-auto max-w-lg">
            @foreach (Auth::user()->menus as $cart)
                <div class="flex items-center gap-4 mb-6 p-4 border rounded-lg shadow-sm">
                    <div class="flex gap-4">
                        <div class="w-24 h-24">
                            <img src="{{ asset('assets/image/' . $cart->image) }}" alt="" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h1 class="text-lg font-semibold">{{ $cart->name }}</h1>
                            <p class="text-gray-500">{{ $cart->description }}</p>
                            <p class="font-semibold">$ {{ $cart->price }}</p>
                        </div>
                    </div>
                    <div class="flex items-center ml-auto">
                        <div class="flex items-center border rounded-lg border-gray-300">
                            <form action="{{ route('cart.update.minus', $cart->id) }}" method="POST" class="p-2">
                                @csrf
                                <button type="submit" name="quantity" value="{{ $cart->pivot->quantity - 1 }}"
                                    class="text-gray-600 hover:text-red-500">
                                    &minus;
                                </button>
                            </form>

                            <input type="number" id="Quantity" value="{{ $cart->pivot->quantity }}"
                                class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                                readonly />

                            <form action="{{ route('cart.update.add', $cart->id) }}" method="POST" class="p-2">
                                @csrf
                                <button type="submit" name="quantity" value="{{ $cart->pivot->quantity + 1 }}"
                                    class="text-gray-600 hover:text-green-500">
                                    &plus;
                                </button>
                            </form>
                        </div>

                        <form action="{{ route('cart.delete') }}" method="POST" class="ml-4">
                            @csrf
                            {{-- @method("PUT") --}}
                            <input name="menu_id" type="hidden" value="{{ $cart->id }}">
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                &times;
                            </button>
                        </form>
                    </div>
                </div>

                <input type="hidden" name="menuId" value="{{ $cart->id }}">
            @endforeach

            <div class="flex justify-between items-center">
                <form  action="{{ route('menu.index') }}" method="GET" class="mb-3">
                    @csrf
                    <button class=" text-zinc-700 hover:text-purple-700">
                        Continue Your Purchase ?
                    </button>
                </form>
                <form action="/session" method="GET" class="mt-8">
                    @csrf
                    <button class="nav-btn text-white p-3 rounded-lg hover:bg-purple-950">Proceed to Checkout</button>
                </form>
            </div>
        </div>
    </section>
@endsection

