<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use App\Models\Menu; // Assuming Menu model exists
use Illuminate\Support\Facades\Auth as FacadesAuth;

class Cart extends Component
{
    public $cartQuantities = [];

    public function mount()
    {
        $this->cartQuantities = Auth::user()->menus()->withPivot('quantity')->pluck('pivot.quantity', 'id')->toArray();
    }

    public function decrementQuantity($menuId)
    {
        if ($this->cartQuantities[$menuId] > 0) {
            $this->cartQuantities[$menuId]--;
        }
    }

    public function incrementQuantity($menuId, $maxQuantity = null)
    {
        // Implement validation or logic to restrict quantity if necessary
        if (!isset($maxQuantity) || $this->cartQuantities[$menuId] < $maxQuantity) {
            $this->cartQuantities[$menuId]++;
        }
    }

    public function updateCart()
    {
        try {
            Auth::user()->menus()->attach(
                $this->cartQuantities->mapWithKeys(function ($quantity, $menuId) {
                    return [$menuId => ['quantity' => $quantity]];
                })->all()
            );

            // Optional: Flash a success message or perform other actions
            $this->dispatchBrowserEvent('cartUpdated'); // Example for broadcasting an event
        } catch (\Throwable $th) {
            // Handle database or other errors here
            dd($th->getMessage()); // For debugging (replace with appropriate error handling)
        }
    }
}
