@extends('layouts.index')

@section('main')
    <div class="">
        <h1>
            hello {{ auth()->user()->name }}
        </h1>
        <h3>
            here what you need to do mr.{{ auth()->user()->role }}
        </h3>
        <div class="">
            <h1>All Reservations</h1>
            @foreach ($reservations as $reservation)
                <div class="flex justify-around py-4">
                    <h4>
                        {{ $reservation->user->name }}
                    </h4>
                    <h4>
                        {{ $reservation->table->table_number }}
                        <span class="text-[15px] lg:ms-5 p-1 bg-blue-500 rounded-md">
                            <button data-bs-toggle="modal" data-bs-target="#edit{{ $reservation->id }}">edit</button>
                        </span>
                    </h4>
                    <h4>
                        {{ $reservation->date }}
                    </h4>
                    <h4>
                        {{ $reservation->timeStart }}
                    </h4>
                    <h4>
                        {{ $reservation->timeEnd }}
                    </h4>
                    {{-- delete reservation --}}
                    <span id="clickMe" type="button"
                        class="text-[15px] lg:ms-5 p-1 bg-red-500 rounded-md"data-bs-toggle="modal"
                        data-bs-target="#{{ $reservation->id }}">
                        <button>delete</button>
                    </span>
                </div>

                <div class="modal fade" id="edit{{ $reservation->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-body ">
                                {{-- edit table --}}
                                <form action="{{ route('edit.table', $reservation) }}" method="post" class="w-full  flex flex-col gap-y-5 ">
                                    @csrf
                                    @method('PUT')
                                    <label for="">Table Number</label>
                                    <select name="table_id" id="">
                                        @foreach ($tables as $Table)
                                            <option value="{{ $Table->id }}">{{ $Table->table_number }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit">change</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- delete modal --}}
                <div class="modal fade" id="{{ $reservation->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-body ">
                                <button type="button" class="btn-close float-right" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-3.5 cursor-pointer shrink-0 fill-black hover:fill-red-500 "
                                        viewBox="0 0 320.591 320.591">
                                        <path
                                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                                            data-original="#000000"></path>
                                        <path
                                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                                            data-original="#000000"></path>
                                    </svg>
                                </button>
                                <div class="my-8 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 fill-red-500 inline"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                            data-original="#000000" />
                                        <path
                                            d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                            data-original="#000000" />
                                    </svg>
                                    <h4 class="text-lg font-semibold mt-6">Are you sure you want to delete it?</h4>
                                </div>
                                <div class="flex justify-end gap-2">
                                    <button class=" py-2 bg-gray-200 rounded-md px-4" data-bs-dismiss="modal"
                                        aria-label="Close">cancel</button>
                                    <button class=" py-2 bg-red-600 rounded-md px-4">delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
