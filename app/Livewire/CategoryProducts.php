<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryProducts extends Component
{

    public $categories;

    public function mount()
    {
        $this->categories = Category::query()
            ->where([['active', 1], ['parent_id', '!=', null]])->get();
    }

    public function render()
    {

        return view('livewire.category-products');
    }
}
