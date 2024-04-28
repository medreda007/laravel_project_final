<!-- Button trigger modal -->
<button id="clickMe" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">


                <form method="post" class="w-full  flex flex-col gap-y-5 " action="{{ route('reservation.store') }}" >
                    @csrf
                    <label for="">Table Number</label>
                    <select name="table_id" id="">
                        @foreach ($Tables as $Table)
                            <option value="{{ $Table->id }}">{{ $Table->table_number }}</option>
                        @endforeach
                    </select>
                    <small class="p-0">
                        For more information about the table and its location, you can always
                        <a href="#" class="text-blue-500 underline">contact us</a>.
                    </small>

                    <label for="">Start Day</label>
                    <input name="date" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start"
                        type="date">

                    <label for="">Start time</label>
                    <input name="timeStart" step="1800" required min="12:00:00" max="22:00:00" value="13:00:00"
                        id="time-start" type="time">

                    {{-- <label class="d-none"  for="">end Day</label>
                    <input class="d-none" name="dateEnd" id="date-end" type="date"> --}}

                    <label for="">end time</label>
                    <input name="timeEnd" id="time-end" type="time">

                    <button class="w-f py-3 nav-btn hover:bg-purple-950 rounded-md text-white ">book</button>
                </form>

            </div>

        </div>
    </div>
</div>
