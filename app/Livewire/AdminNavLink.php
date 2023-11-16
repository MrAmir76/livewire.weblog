<?php

namespace App\Livewire;

use Livewire\Component;

class AdminNavLink extends Component
{
    public $link;
    public $font;
    public $nameLink;

    public function mount($link, $font, $nameLink)
    {
        $this->nameLink = $nameLink;
        $this->font = $font;
        $this->link = $link;
    }

    public function render()
    {
        return view('livewire.admin-nav-link');
    }
}
