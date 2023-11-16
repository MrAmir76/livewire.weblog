<?php

namespace App\Livewire\Page;

use Livewire\Component;

class Logout extends Component
{


    public function close()
    {
        auth()->logout();
        session()->flash('alert','شما از حساب کاربری خارج شدید.');
        $this->redirect(route('index'), 1);
    }

    public function render()
    {
        return view('livewire.page.logout');
    }
}
