<?php

namespace App\Http\Livewire\Admin;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminOrderCancelMail;
use App\Mail\AdminOrderDeliveredMail;

class AdminOrderComponent extends Component
{
    public function updateOrderStatus($order_id,$status)
    {
        $order = Order::find($order_id);
        $order-> status = $status;
        if ($status == "delivered")
        {
            $order->delivered_date = DB::raw('CURRENT_DATE');
            $this-> sendOrderDeliveredMail($order);
        }
        else if ($status == "canceled")
        {
            $order->calceled_date = DB::raw('CURRENT_DATE');
            $this-> sendOrderCancellationMail($order);
        }
        $order -> save();
        session()->flash('order_message','Order status has been updated successfully !');


    }

    public function sendOrderDeliveredMail($order)
    {
        Mail::to($order->email)->send(new AdminOrderDeliveredMail($order));

    }

    public function sendOrderCancellationMail($order)
    {
        Mail::to($order->email)->send(new AdminOrderCancelMail($order));

    }
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-order-component',['orders'=>$orders])->layout('layouts.base');
    }
}
