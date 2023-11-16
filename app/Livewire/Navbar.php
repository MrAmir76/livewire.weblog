<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{
    public $superCategories;


    public function mount()
    {
        $this->superCategories = Category::query()->where([['active', 1], ['parent_id', null]])->get();
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
