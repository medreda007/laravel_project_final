@extends('layouts.index2')

@section('content')
    <section>
        <div class="flex justify-center items-center flex-col p-5">
            @foreach ($Menus as $menu)
                <div class="flex gap-5 ">
                    <h1>{{ $menu->name }}</h1>
                    <h1>{{ $menu->price }}</h1>
                    <h1>{{ $menu->description }}</h1>
                    <form action="{{ route('cart.add', $menu->id) }}" method="POST">
                        @csrf <button class="border rounded-lg w-10">Add to Cart</button>
                    </form>
                </div>
            @endforeach
        </div>
    </section>
@endsection
