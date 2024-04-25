<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function session(Request $request)
    {
        Stripe::setApiKey(config('stripe.sk'));


        $userCart = Cart::where('user_id', Auth::user()->id)->get();
        $totalCartQuantity = Cart::where('user_id', Auth::user()->id)->sum('quantity');
        $totalCartPrice = Cart::where('user_id', Auth::user()->id)->sum('price');
        // // $order = Menu::where('id',$userCart->menu_id)->all();;

        // foreach (auth()->user()->menus as  $menu) {
        //     dd($menu->price);
        // }



        // Collect the user's menus and map them to line items for the session
        $lineItems = [];

        foreach (auth()->user()->menus as $menu) {
            $lineItems[] = [
                'price_data' => [
                    'currency'     => 'mad',
                    'product_data' => [
                        'name'        => $menu->name,
                        'description' => $menu->description,
                    ],
                    'unit_amount'  => $menu->price * 100,
                ],
                'quantity' => $menu->pivot->quantity,
            ];
        }

        // Create the session
        $session = Session::create([
            'line_items'  => $lineItems,
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('dashboard'),
        ]);

        // Redirect to the session URL
        // return redirect()->away($session->url);


        return redirect()->away($session->url);
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
    public function edit(string $id)
    {
        //
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
