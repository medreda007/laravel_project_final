<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        $Tables = Table::all();
        return view('Reservation.reservation',compact("Tables"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Reservation::create([
            'user_id' => auth()->user()->id,
            'table_id' => $request->table_id,
            'date' => $request->date,
            'timeStart' => $request->timeStart,
            'timeEnd' => $request->timeEnd,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //

        $events = Reservation::all()->map(function (Reservation $event) {
            $start = $event->date . " " . $event->timeStart;
            $end = $event->date . " " . $event->timeEnd;
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->table_id,
                "color" => "#FF0000",
            ];
        });     

        return response()->json([
            "reservations" => $events
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
