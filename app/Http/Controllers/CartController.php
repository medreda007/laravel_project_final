<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function addToCart(Request $request, $menuId)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Find the menu by its ID
        $menu = Menu::findOrFail($menuId);

        // Find or create a cart entry for the user and the specified menu
        $cart = Cart::firstOrCreate([
            'user_id' => $user->id,
            'menu_id' => $menuId,
            'price' => $menu->price,

        ]);

        // Check if a cart entry already exists
        if ($cart->exists()) {
            // Increment the quantity if cart entry already exists
            $cart->increment('quantity');
            $cart->price += $menu->price;
        } else {
            // Set initial quantity to 1 if new cart entry is created
            $cart->quantity = 1;
            $cart->price = $menu->price;
            $cart->save();
        }

        // Calculate the total cart quantity for the user
        $totalCartQuantity = Cart::where('user_id', $user->id)->sum('quantity');

        // dd($totalCartQuantity);
        // Return a JSON response with a success message and the total cart quantity
        return redirect()->route('cart.index');
    }


    // Cart::creat([
    //     'user_id' => $user->id,
    //     'menu_id' => $menu->id,
    //     "quantity" => $cartQty
    // ]);
    // $cart->menus->user_id = $user->id;

    //     return redirect()->route('cart.index')->with('message', 'Item added to cart successfully!');
    // }


    /**
     * Display a listing of the resource.
     */
    public function index(Menu $menu)
    {
        //
        $carts = Cart::where('user_id', Auth::id())->first();
        return view('Cart.cart', compact('carts'));
    }

    // public function deleteItemOne(Request $request, $menuId)
    // {
    //     $cart = Cart::where('user_id', Auth::id())->firstOrFail();

    //     // Check if cart has at least one item of the specified menu
    //     $menuItem = $cart->menus()->where('menu_id', $menuId)->first();
    //     if (!$menuItem) {
    //         return redirect()->route('cart.index')->with('message', 'Item not found in your cart.');
    //     }

    //     $cart->menus()->detach($menuId);

    //     $message = 'Item removed from cart successfully!';

    //     // Check if any items of that menu remain in the cart
    //     if (!$cart->menus()->where('menu_id', $menuId)->exists()) {
    //         $message = 'All instances of this item have been removed.';
    //     }

    //     return redirect()->route('cart.index')->with('message', $message);
    // }



    // public function deleteItem(Request $request, $menuId)
    // {
    //     $cart = Cart::where('user_id', Auth::id())->firstOrFail();

    //     $cart->menus()->detach($menuId);

    //     return redirect()->route('cart.index')->with('message', 'Item removed from cart successfully!');
    // }



    public function updateCartadd(Request $request, $cartId)
    {
        dd("h");

        $cart = Cart::where("menu_id", $cartId)->firstOrFail();
        // foreach ($user as $key => $value) {
        //     $cart = Cart::where('user_id', Auth::id())->firstOrFail();
        //     $cart->menus()->attach($cartId);
        // }
        // dd($user);

        // $cart = Cart::where('user_id', Auth::id())->firstOrFail();

        // dd($cart->quantity);

        $cart->quantity = $cart->quantity + 1;

        $menu = Menu::findOrFail($cartId);
        $cart->price += $menu->price;
        $cart->save();
        // Find the specific menu that matches the cart ID (assuming `cartId` is the ID of a related `Cart` model)
        // $matchingMenu = $user->where('cart_id', $cartId)->first();

        // Debug the matching menu
        // dd($matchingMenu);
        // $cart->quantity = +1;

        return redirect()->back(); // Redirect back to the cart page
    }

    public function updateCartminus(Request $request, $cartId)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Find the cart item for the authenticated user based on the provided cartId (menu_id)
        $cart = Cart::where('user_id', $user->id)
            ->where('menu_id', $cartId)
            ->firstOrFail();

        // Find the corresponding menu item
        $menu = Menu::findOrFail($cartId);

        // If the cart item's quantity is greater than 0, decrease the quantity
        if ($cart->quantity > 0) {
            $cart->quantity -= 1;
            $cart->price -= $menu->price;

            // Save the updated cart
            $cart->save();
        }

        // If the cart item's quantity reaches 0, delete the cart item
        if ($cart->quantity == 0) {
            $cart->delete();
        }

        // Redirect back to the cart page
        return redirect()->back();
    }



    public function test()
    {
        dd("f");
    }


    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Cart $cartId)
    // {

    //     // dd($cart);
    //     // $cart->delete();
    //     // return redirect()->route('cart.index')->with('message', 'Item removed from cart successfully!');
    // }
    public function destroy(Request $request)
    {
        $cart = Cart::where("menu_id", $request->test)->first();
        $cart->delete();
        return redirect()->back();
    }
}
