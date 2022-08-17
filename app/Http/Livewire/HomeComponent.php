<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;
class HomeComponent extends Component
{
    public function render()
    {
        if(Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
            Cart::instance('requesteditemlist')->restore(Auth::user()->email);
            Cart::instance('preferedmechaniclist')->restore(Auth::user()->email);
            Cart::instance('searchHistory')->restore(Auth::user()->email);
        }

        return view('livewire.home-component')->layout('layouts.base');
    }
}
