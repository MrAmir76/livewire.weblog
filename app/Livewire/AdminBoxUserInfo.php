<?php

namespace App\Livewire;

use Livewire\Component;

class AdminBoxUserInfo extends Component
{

    public $name;
    public $email;
    public $created;

    public function mount($name, $email, $created)
    {
        $this->name = $name;
        $this->email = $email;
        $this->created = $created;
    }

    public function render()
    {
        return view('livewire.admin-box-user-info');
    }
}
