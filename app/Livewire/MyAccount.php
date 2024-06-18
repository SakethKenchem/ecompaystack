<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MyAccount extends Component
{
    public $user;
    public $name;
    public $email;

    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function updateAccountDetails()
    {
        $validatedData = Validator::make([
            'name' => $this->name,
            'email' => $this->email,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ])->validate();

        $this->user->update($validatedData);

        session()->flash('message', 'Account details updated successfully.');
    }

    public function render()
    {
        return view('livewire.my-account');
    }
}