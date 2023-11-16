<?php

namespace App\Livewire;


use App\Models\SocialNetworks;
use Livewire\Component;

class Footer extends Component
{
    private $socialNetworks;

    public function mount()
    {
        $this->socialNetworks = SocialNetworks::query()->where('active', 1)->get();
    }

    public function render()
    {
        return view('livewire.footer', ['socialNetworks' => $this->socialNetworks]);
    }
}
