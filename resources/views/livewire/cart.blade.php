<h2>Your Cart</h2>

@foreach (Auth::user()->menus as $cart)
{{-- <livewire:cart /> --}}
    <h1>{{ $cart->name }}</h1>

    <div class="flex items-center rounded border border-gray-200">
        <label for="quantity-{{ $cart->id }}" class="sr-only">Quantity</label>

        <div class="flex items-center w-full">
            <button wire:click.prevent="decrementQuantity({{ $cart->id }})" type="button"
                class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                &minus;
            </button>

            <input wire:model="cartQuantities.{{ $cart->id }}" type="number" id="quantity-{{ $cart->id }}"
                value="{{ $cart->pivot->quantity }}"
                class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />

            <button wire:click.prevent="incrementQuantity({{ $cart->id }})" type="button"
                class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                &plus;
            </button>
        </div>
    </div>
@endforeach
