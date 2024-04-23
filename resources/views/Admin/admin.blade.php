@extends('layouts.index')


@section('main')
    <div class="">
        <h1>
            Welcome again!
            <span>
                {{ auth()->user()->name }}
            </span>
        </h1>
    </div>
    <div class="">

        {{-- all users --}}
        <div class="flex flex-col items-center justify-center">
            <h1>
                All users :
            </h1>
            <div class="border rounded p-10 w-[60vw]">
                @foreach ($Users as $user)
                    <div class="flex justify-center gap-x-28 w-full border-b-2 pb-4">
                        <h1>
                            {{ $user->name }}
                        </h1>
                        <h3>
                            {{ $user->email }}
                        </h3>
                        <h3>
                            {{ $user->role }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- end all users --}}

        {{-- all staff --}}
        <div class="flex flex-col items-center justify-center">
            <h1 class="flex ">
                All staff :
            </h1>
            <div class="border rounded p-10 w-[60vw] ">
                @foreach ($Staffs as $staff)
                    <div class="flex justify-center gap-x-28 ">
                        <h1>
                            {{ $staff->name }}
                        </h1>
                        <h3>
                            {{ $staff->email }}
                        </h3>
                        <h3>
                            {{ $staff->role }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- all tables --}}
        <div class="flex flex-col items-center justify-center">
            <h1>
                All tables :
            </h1>
            <div class="border rounded p-10 min-w-[60vw]">
                @foreach ($Tables as $table)
                    <div class="flex justify-between">
                        <h1>
                            {{ $table->table_number }}
                        </h1>
                        <h3 class="">
                            {{ $table->capacity }}
                        </h3>
                        <h3 class="">
                            {{ $table->status }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- end all tables --}}

        {{-- all reservations --}}
        <div class="flex flex-col items-center justify-center">
            <h1>
                All reservations :
            </h1>
            <div class="border rounded p-10 w-[60vw]">
                @foreach ($Reservations as $reservation)
                    <div class="flex justify-center gap-x-28 ">
                        <h1>
                            {{ $reservation->name }}
                        </h1>
                        <h3>
                            {{ $reservation->email }}
                        </h3>
                        <h3>
                            {{ $reservation->date }}
                        </h3>
                        <h3>
                            {{ $reservation->time }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- end all reservations --}}
        {{-- all menu --}}
        <div class="flex flex-col items-center justify-center">
            <h1>
                All menu :
            </h1>
            <div class="border rounded p-10 w-[60vw]">
                @foreach ($Menus as $menu)
                    <div class="flex justify-center gap-x-28 ">
                        <h1>
                            {{ $menu->name }}
                        </h1>
                        <h3>
                            {{ $menu->price }}
                        </h3>
                        <h3>
                            {{ $menu->status }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- end all menu --}}

    {{-- promote to staff --}}
    <div class="flex flex-col items-center justify-center">
        <h1>
            Promote to staff :
        </h1>
        <div class="border rounded p-10 w-[60vw]">
            @foreach ($Users as $user)
                <div class="flex justify-center gap-x-28 ">
                    <h1>
                        {{ $user->name }}
                    </h1>
                    <h3>
                        {{ $user->email }}
                    </h3>
                    <h3>
                        {{ $user->role }}
                    </h3>
                    <form action="{{ route('profil.promote', $user->id) }}" method="POST">
                        @csrf
                        <button type="submit">
                            Promote
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
