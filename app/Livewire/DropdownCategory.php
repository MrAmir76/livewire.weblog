<?php

namespace App\Livewire;

use Livewire\Component;

class DropdownCategory extends Component
{
    public $category;


    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.dropdown-category');
    }
}
