<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Users = User::where('role', '!=', 'admin')->get();
        $Staffs = User::role('staff')->get();
        $Tables = Table::all();
        // breakfast menu
        $Breakfast = Menu::where('category', 'breakfast')->get();
        // lunch menu
        $Lunch = Menu::where('category', 'lunch')->get();
        // dinner menu
        $Dinner = Menu::where('category', 'dinner')->get();

        $Reservations = Reservation::all();
        return view('Admin.admin', compact('Users', 'Staffs', 'Tables', 'Breakfast','Lunch','Dinner', 'Reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // promote the user to staff
    public function promote($id)
    {
        $user = User::find($id);
        $user->removeRole('client');
        $user->assignRole('staff');

        $user->update([
            "role" => "staff",
        ]);
        return redirect()->back();
    }

    public function demote ($id) {
        $user = User::find($id);
        $user->removeRole('staff');
        $user->assignRole('client');

        $user->update([
            "role" => "client",
        ]);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeTable(Request $request)
    {
        //
        request()->validate([
            "table_number" => "required",
            "capacity" => "required",
        ]);
        if ($request->image) {
            $image = $request->file("image");
            $imageName = time() . "_" . $image->getClientOriginalName();
            $image->storeAs("public/img", $imageName);
            Table::create([
                "table_number" => $request->table_number,
                "capacity" => $request->capacity,
                "image" => $imageName,
            ]);
        }
        Table::create([
            "table_number" => $request->table_number,
            "capacity" => $request->capacity,
        ]);
        return redirect()->back();
    }
    public function storeMenu(Request $request)
{
    $request->validate([
        "name" => "required",
        "price" => "required|integer",
        "description" => "required",
        "category" => "required|in:breakfast,lunch,dinner",
        "image" => "required|image"
    ]);

    $data = [
        "name" => $request->name,
        "price" => $request->price,
        "description" => $request->description,
        "category" => $request->category,
    ];

    // Process image if provided
    if ($request->hasFile('image')) {
        $image = $request->file("image");
        $imageName =  time() . "_" . $image->getClientOriginalName();
        $image->storeAs("public/img", $imageName);
        $data["image"] = 'storage/img/' . $imageName;
    }

    Menu::create($data);

    return redirect()->back();
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editMenu(Request $request, Menu $menu)
    {
        // Check if an image file is present in the request
        if ($request->hasFile('image')) {
            // Get the uploaded image
            $image = $request->file('image');

            // Generate a unique name for the image
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Store the image in the 'public/img' directory
            $image->storeAs('public/img', $imageName);

            // Update the menu with the new image
            $menu->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'category' => $request->category,
                'image' => $imageName,
            ]);
        } else {
            // Update the menu without changing the image
            $menu->update([
                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category,
                'price' => $request->price,
            ]);
        }

        // Redirect back with a success message (optional)
        return redirect()->back()->with('success', 'Menu updated successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Menu $menu)
    {
        //
        $menu->delete();
        return redirect()->back();
    }
    public function destroyTable(Request $request, Table $table)
    {
        //
        $table->delete();
        return redirect()->back();
    }
}
