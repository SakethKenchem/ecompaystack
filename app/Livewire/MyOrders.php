<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class MyOrders extends Component
{
    public $orders;

    public function mount()
    {
        $this->orders = Order::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.my-orders', [
            'orders' => $this->orders,
        ]);
    }
}
