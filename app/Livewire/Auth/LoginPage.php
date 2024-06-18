<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginPage extends Component
{
    public $email;
    public $password;

    public function save()
    {
        $this->validate([
            'email' => 'required|email| exists:users,email',
            'password' => 'required|min:6|max:255'
        ]);

        if(!auth()->attempt(['email' => $this->email, 'password' => $this->password])){
            session()->flash('error', 'Invalid login details');
            return;
        }

        return redirect()->intended();
    }
    public function render()
    {   

        return view('livewire.auth.login-page');
    }
}
