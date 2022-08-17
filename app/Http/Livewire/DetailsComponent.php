<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\Catagory;
use Livewire\Component;
use Cart;


class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this -> slug = $slug;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
        return redirect()->route('product.cart');
    }
    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
    }
    public function addToMechanicPreferencelist($product_id, $product_name, $product_price)
    {
        Cart::instance('preferedmechaniclist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
    }

    public function addToRequestedItemList($product_id, $product_name, $product_price)
    {
        Cart::instance('requesteditemlist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
    }
    

    public function render()
    {
        $product = Product::where('slug', $this -> slug)->first();
        return view('livewire.details-component',['product'=>$product])->layout('layouts.base');
    }
}
