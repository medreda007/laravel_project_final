@extends('layouts.index')

@section('main')
    <section>
        <div class="flex justify-center items-center flex-col p-5">
            @foreach ($Menus as $menu)
                <div class="flex gap-5 ">
                    <h1>{{ $menu->name }}</h1>
                    <h1>{{ $menu->price }}</h1>
                    <h1>{{ $menu->description }}</h1>
                    <a href="{{ route('checkin.index',$menu->id) }}">
                        <button class="border rounded-lg w-10">BUY</button>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
