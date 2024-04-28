@extends('layouts.index2')


@section('content')
    <div class="flex justify-center p-5">
        <h1 class="lg:w-[50%] text-center text-4xl font-semibold py-5">
            Welcome again to your restaurant management page <span>
                {{ auth()->user()->name }} !
            </span>
        </h1>
    </div>
    <div class="">
        <div class="lg:flex justify-around pb-5">

            {{-- all users --}}
            <div class="p-5">
                <div class="text-4xl py-3">
                    <h1>
                        All website users:
                    </h1>
                </div>
                <div
                    class="border flex flex-col items-center justify-center rounded-lg border-black border-opacity-10 p-10 min-h-[40vh] bg-zinc-50">
                    @foreach ($Users as $user)
                        <div class="flex  justify-around w-full lg:gap-x-28 pb-3">
                            <h4 class="font-bold lg:w-1/3 text-xl">
                                {{ $user->name }}
                            </h4>
                            <h4 class="lg:w-1/3 text-xl">
                                {{ $user->role }}
                            </h4>
                            <form class="" action="{{ route('profil.promote', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="promote-btn p-1 rounded-md hover:text-white">
                                    Promote
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- end all users --}}

            {{-- all staff --}}
            <div class="p-5 mt-">
                <div class="text-4xl py-3">
                    <h1 class="flex ">
                        All staff :
                    </h1>
                </div>
                <div
                    class="border flex flex-col items-center justify-center rounded-lg border-black border-opacity-10 p-10 bg-zinc-50 min-h-[40vh]">
                    @foreach ($Staffs as $staff)
                        <div class="flex  justify-around w-full lg:gap-x-28 pb-3">
                            <h1 class="font-bold lg:w-1/3 text-xl">
                                {{ $staff->name }}
                            </h1>
                            <h4 class="lg:w-1/3 text-xl">
                                {{ $staff->role }}
                            </h4>
                            <form class="" action="{{ route('profil.demote', $staff->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-red-600 p-1 py-2  rounded-md font-thin text-white">
                                    Demote
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- all reservations --}}
        <div class="flex flex-col items-center justify-center py-10">
            <div class="text-3xl py-3">
                <h1>
                    All reservations :
                </h1>
            </div>
            <div class="min-w-[82vw] border rounded-lg border-black border-opacity-10 p-10 bg-zinc-50  min-h-[40vh]">
                @foreach ($Reservations as $reservation)
                    <div class="flex justify-center gap-x-28 text-xl p-4">
                        <h1>
                            {{ $reservation->user->name }}
                        </h1>
                        <h3>
                            {{ $reservation->table->table_number }}
                        </h3>
                        <h3>
                            {{ $reservation->date }}
                        </h3>
                        <h3>
                            {{ $reservation->timeStart }}
                        </h3>
                        <h3>
                            {{ $reservation->timeEnd }}
                        </h3>
                        <form action="{{ route('delete.reservation', $reservation) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 rounded-md px-4 py-1 text-white">cancel</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- end all reservations --}}

        {{-- all menu --}}
        @include('components.adminMenu')
        {{-- end all menu --}}

        {{-- all tables --}}
        <div class="flex flex-col items-center justify-center py-10">
            <h1 class="text-4xl py-3">
                All tables :
            </h1>
            <div class="min-w-[82vw] border rounded-lg border-black border-opacity-10 p-10   min-h-[60vh]">
                @foreach ($Tables as $table)
                    <div class="flex justify-around py-3">
                        <h1 class="font-bold">
                            <span class="font-medium">Table number :</span> {{ $table->table_number }}
                        </h1>
                        <h3 class="font-bold">
                            <span class="font-medium">Table capacity :</span> {{ $table->capacity }}
                        </h3>
                        <form action="{{ route('table.delete',$table) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="py-2 px-3 rounded bg-red-500 text-white w-full">
                                Delete
                            </button>
                        </form>
                    </div>
                @endforeach
                {{-- table create --}}
                <div class="flex py-5 justify-center ">
                    <h1 class="text-3xl ">
                        Add a new table :
                    </h1>

                </div>


            </div>
            <div class="py-5 lg:max-w-md lg:w-[40vw]">
                <form  action="{{ route('table.create') }}" method="POST" enctype="multipart/form-data"
                    class="mx-auto max-w-md p-4 bg-white rounded-md shadow-md">
                    @csrf
                    <h1 class="text-xl font-bold mb-4">New Table:</h1>
                    <div class="flex flex-col gap-4">

                        <!-- Input for Table Number -->
                        <input type="text"
                            class="border rounded-md p-2 w-full focus:outline-none focus:border-purple-500 transition duration-200"
                            name="table_number" id="table_number" placeholder="Table Number" required>

                        <!-- Input for Capacity -->
                        <input type="number"
                            class="border rounded-md p-2 w-full focus:outline-none focus:border-purple-500 transition duration-200"
                            name="capacity" id="capacity" placeholder="Capacity" required>

                        <!-- Input for Image -->
                        {{-- <input type="file"
                            class="border rounded-md p-2 w-full focus:outline-none focus:border-purple-500 transition duration-200"
                            name="image" id="image" required> --}}

                        <!-- Add Button -->
                        <button id="clickMe" type="submit"
                            class="bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-purple-800 transition duration-200 w-full">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end all tables --}}


    </div>
@endsection
