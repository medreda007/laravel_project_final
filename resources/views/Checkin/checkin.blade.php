@extends('layouts.index')

@section('main')
    <div class=" flex flex-col">
        {{ auth()->user()->name }}
    </div>
    @php
        // Get the menus associated with the authenticated user
        $userMenus = auth()->user()->menus;
    @endphp

    @foreach ($userMenus as $menu)
        {{ $menu->name }}
    @endforeach
@endsection
