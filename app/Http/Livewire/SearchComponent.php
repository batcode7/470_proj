<?php

namespace App\Http\Livewire;
use App\Models\Catagory;
use Livewire\Component;
use Cart;

class SearchComponent extends Component
{
    public $search;
    public $product_catagory;
    public $product_catagory_id;
    public function mount()
    {
        $this -> product_catagory = 'All Catagory';
        $this -> fill(request()->only('search','product_catagory','product_catagory_id'));
    }
   
    public function render()
    {
         $catagories = Catagory::all();
         
        return view('livewire.search-component',['catagories'=>$catagories]);
    }
}
