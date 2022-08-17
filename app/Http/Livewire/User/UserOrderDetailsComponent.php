<?php

namespace App\Http\Livewire\User;
use App\Mail\CancelMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserOrderDetailsComponent extends Component
{
    public $order_id;
    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function cancelOrder()
    {
        $order = Order::find($this -> order_id);
        $order -> status = "canceled";
        $order->save();
        $this-> sendCancelOrderMail($order);
    
    
    }

    public function sendCancelOrderMail($order)
    {
        Mail::to($order->email)->send(new CancelMail($order));

    }

    public function render()
    {
        $order = Order::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first(); 
        
        return view('livewire.user.user-order-details-component',['order'=>$order])->layout('layouts.base');
        
    }
}
