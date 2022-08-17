<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Catagory;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;


class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this -> sorting = "default";
        $this -> pagesize = 12;
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

    public function addToRequestedItemList($product_id, $product_name, $product_price)
    {
        Cart::instance('requesteditemlist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
    }
    public function addToMechanicPreferencelist($product_id, $product_name, $product_price)
    {
        Cart::instance('preferedmechaniclist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
    }


    use WithPagination;
    public function render()
    {
        if($this->sorting == "price-asc")
        {
            $products = Product::orderBy('regular_price','ASC')->paginate($this -> pagesize);

        }
        else if($this->sorting == "price-desc")
        {
            $products = Product::orderBy('regular_price','DESC')->paginate($this -> pagesize);

        }else 
        {
            $products = Product::paginate($this -> pagesize);
        }
        
        $catagories = Catagory::all();

        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
            Cart::instance('requesteditemlist')->store(Auth::user()->email);
            Cart::instance('preferedmechaniclist')->store(Auth::user()->email);
        }
        return view('livewire.shop-component',['products'=> $products,'catagories'=>$catagories])->layout('layouts.base');
    }
}
