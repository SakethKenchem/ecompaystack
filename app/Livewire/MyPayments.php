<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

class MyPayments extends Component
{
    public $payments;

    public function mount()
    {
        $this->payments = Payment::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.my-payments', [
            'payments' => $this->payments,
        ]);
    }
}
