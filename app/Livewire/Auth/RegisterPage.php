<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;

    //register function
    public function save(){
        $this->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        //save data to database
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        //redirect to login page
        auth()->login($user);
        return redirect()->intended();
    }




    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
