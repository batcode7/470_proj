<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class RequestItemComponent extends Component
{
    public function render()
    {
        return view('livewire.request-item-component')->layout('layouts.base');
    }
}
