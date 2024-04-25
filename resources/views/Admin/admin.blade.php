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
                all users :
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
                {{-- table create --}}
                <form action="{{ route('table.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col gap-4 justify-center gap-x-28 ">
                        <h1>
                            New table :
                        </h1>
                        <input type="string" class="border" name="table_number" id="">
                        <input type="number" class="border" name="capacity" id="">
                        <input type="file" class="border" name="image" id="">
                        <button type="submit">
                            Create
                        </button>
                    </div>
                </form>
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
                    <div class="flex justify-center gap-x-28 h-44 w-full">
                        <h1>
                            {{ $menu->name }}
                        </h1>
                        <h3>
                            {{ $menu->price }}
                        </h3>
                        <h3>
                            {{ $menu->description }}
                        </h3>

                        <img width="200" src="{{ asset('storage/img/' . $menu->image) }}" alt="">
                        <span class="text-[15px] h-12  bg-blue-500 rounded-md">
                            <button data-bs-toggle="modal" data-bs-target="#{{ $menu->id }}">edit</button>
                        </span>
                    </div>
                    <div class="modal fade" id="{{ $menu->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-body ">
                                    {{-- edit table --}}
                                    <form class="w-[100%] flex flex-col items-center" action="{{ route('menu.edit',$menu) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="">Menu name</label>
                                        <input name="name" type="text">
                                        <label for="">Menu price</label>
                                        <input name="price" type="text">
                                        <label for="">Menu description</label>
                                        <input name="description" type="text">
                                        <label for="">Menu image</label>
                                        <input name="image" type="file">
                                        <button>edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <form action="{{ route('menu.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex gap-4 flex-col justify-around gap-x-28 ">
                        <h1>
                            New menu :
                        </h1>
                        <input type="string" class="border" name="name" id="">
                        <input type="text" class="border" name="description" id="">
                        <input type="number" name="price" id="">
                        <input type="file" class="border" name="image" id="">
                        <button type="submit">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end all menu --}}
@endsection
