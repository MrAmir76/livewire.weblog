<?php

namespace App\Livewire\Page;

use Livewire\Component;

class Auth extends Component
{

    public $username;
    public $password;

    public function login()
    {
        $this->validate([
            'username' => 'required|string|regex:/^[a-zA-Z0-9.-_]{1,}$/',
            'password' => 'required|regex:/^[A-Za-z0-9]{1,}$/'
        ]);

        $authenticated = auth()->attempt(['username' => $this->username, 'password' => $this->password]);

        if ($authenticated) {
            session()->flash('alert', 'شما با موفقیت وارد حساب کاربری شدید.');
            $this->redirect(route('auth.profile'), 1);
        } else {
            $this->addError('authenticated', 'نام کاربری یا رمزعبور اشتباه است');
        }
    }

    public function render()
    {
        return view('livewire.page.auth')->layout('components.layouts.guest');
    }
}
