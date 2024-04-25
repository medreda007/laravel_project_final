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
        $Menus = Menu::all();
        $Reservations = Reservation::all();
        return view('Admin.admin', compact('Users', 'Staffs', 'Tables', 'Menus', 'Reservations'));
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
        $user->assignRole('staff');

        $user->update([
            "role" => "staff",
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
        //
        request()->validate([
            "name" => "required",
            "price" => "required",
            "description" => "required",
        ]);
        if ($request->image) {
            $image = $request->file("image");
            $imageName = time() . "_" . $image->getClientOriginalName();
            $image->storeAs("public/img", $imageName);
            Menu::create([
                "name" => $request->name,
                "price" => $request->price,
                "description" => $request->description,
                "image" => $imageName,
            ]);
        }
        Menu::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
        ]);

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
                'image' => $imageName,
            ]);
        } else {
            // Update the menu without changing the image
            $menu->update([
                'name' => $request->name,
                'description' => $request->description,
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
    public function destroy(string $id)
    {
        //
    }
}
