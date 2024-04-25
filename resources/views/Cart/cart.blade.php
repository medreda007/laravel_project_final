@extends('layouts.index')

@section('main')
    <h2>Your Cart</h2>

    @foreach (Auth::user()->menus as $cart)
        {{-- {{ dd($cart->id) }} --}}
        <h1>{{ $cart->id }}</h1>

        <input type="hidden" name="menuId" value="{{ $cart->id }}">

        <div class="flex items-center rounded border border-gray-200">
            <label for="Quantity" class="sr-only"> Quantity </label>

            <div class="flex items-center w-full">

                {{-- minus -1 --}}
                <form action="{{ route('cart.update.minus', $cart->id) }}" method="POST">
                    @csrf
                    <button type="submit" name="quantity" value="{{ $cart->pivot->quantity - 1 }}"
                        class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                        &minus;
                    </button>
                </form>


                <input type="number" id="Quantity" value="{{ $cart->pivot->quantity }}"
                    class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                    readonly />

                {{-- add +1 --}}
                <form action="{{ route('cart.update.add', $cart->id) }}" method="POST">
                    @csrf
                    <button type="submit" name="quantity" value="{{ $cart->pivot->quantity + 1 }}"
                        class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                        &plus;
                    </button>
                </form>
                {{-- Delete form --}}
                <form action="{{ route('cart.delete', $cart) }}" method="post">
                    @csrf
                    <input name="test" value="{{ $cart->id }}" type="hidden">
                    {{-- @method('DELETE') --}}
                    <button type="submit" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                        &times;
                    </button>
                </form>
                {{-- {{ dd($cart->pivot->quantity  ) }} --}}
            </div>
        </div>
    @endforeach
    <form action="/session" method="GET">
        @csrf
        <button>
            proceed to purchase
        </button>
    </form>
@endsection
