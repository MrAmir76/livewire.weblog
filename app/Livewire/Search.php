<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $params;
    public $title;

    public function mount($params)
    {
        $this->params = $params;
        $this->title = "جستوجو: " . $params;
    }

    public function render()
    {
        $products = Product::query()
            ->where('name', "like", "%$this->params%")
            ->Orwhere('description', "like", "%$this->params%")
            ->orderBy('id', 'desc')->paginate(6);

        return view('livewire.page.category', compact('products'));
    }
}
