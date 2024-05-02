@extends('layouts.index')

@include('Reservation.components.modal')

@section('main')
    <div class="flex justify-center">
        <div class="h-1/2 w-1/2 bg-zinc-200 p-4 border rounded-lg" id="calendar">
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', async function() {

                const {
                    data
                } = await axios.get("/calendar/show")
                // console.log(data);
                // console.log(data.reservations);

                const events = data.reservations;

                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {
                        left: 'timeGridWeek',
                        center: 'title',
                        // right: 'listMonth,listWeek,listDay'
                    },
                    views: {
                        listDay: { // Customize the name for listDay
                            buttonText: 'Day Events',
                        },
                        listWeek: { // Customize the name for listWeek
                            buttonText: 'Week Events'
                        },
                        listMonth: { // Customize the name for listMonth
                            buttonText: 'Month Events'
                        },
                        timeGridWeek: {
                            buttonText: 'Week', // Customize the button text
                        },
                        timeGridDay: {
                            buttonText: "Day",
                        },
                        dayGridMonth: {
                            buttonText: "Month",
                        },




                    },
                    initialView: "timeGridWeek",
                    slotMinTime: "12:00:00", // min  time  appear in the calendar
                    slotMaxTime: "23:00:00",
                    nowIndicator: true,
                    selectable: true,
                    selectMirror: true,
                    selectOverlap: true,
                    weekends: true,
                    events: events,

                    selectAllow: (info) => {
                        let instant = new Date()
                        return info.start > instant
                    },
                    select: (info) => {

                        let start = info.start
                        let end = info.end


                        if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                            alert("rak khditi bzaf dyal l wa9t")
                            calendar.unselect()
                            return
                        }
                        document.getElementById("date-start").value = formatDate(start).day
                        if (info.allDay) {
                            // document.getElementById("date-end").value = formatDate(start).day
                            document.getElementById("time-start").value = "09:00:00"
                            document.getElementById("time-end").value = "19:00:00"
                        } else {
                            // document.getElementById("date-end").value = formatDate(end).day
                            document.getElementById("time-start").value = formatDate(start).time
                            document.getElementById("time-end").value = formatDate(end).time
                        }


                        document.getElementById("clickMe").click()


                    },
                    eventClick: (info) => {
                        // alert("event clicked")

                        console.log(info);
                    }
                });
                calendar.render();


                function formatDate(date) {
                    let year = String(date.getFullYear())
                    let month = String(date.getMonth() + 1).padStart(2, 0)
                    let day = String(date.getDate()).padStart(2, 0)

                    let hour = String(date.getHours()).padStart(2, 0)
                    let min = String(date.getMinutes()).padStart(2, 0)
                    let sec = String(date.getSeconds()).padStart(2, 0)

                    return {
                        day: `${year}-${month}-${day}`,
                        time: `${hour}:${min}:${sec}`
                    }


                }
            });
        </script>
    </div>
    <div class="bg-background rounded-lg border border-gray-200 p-20 flex flex-col justify-center items-center">
        <h2 class="text-xl font-semibold mb-4">Table réserver</h2>
        @foreach (auth()->user()->reservations as $item)
            <div class="bg-neutral-800 text-white rounded-md p-3 mb-2 lg:w-[80vw]">
                <h3 class="text-lg font-semibold">{{ $item->table->table_number }}</h3>
                <p class="">{{ $item->timeStart }}</p>
            </div>
        @endforeach
    </div>
@endsection
