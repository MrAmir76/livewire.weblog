<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductSlider extends Component
{

    public $products;

    public function mount()
    {
        $this->products = Product::where('active', 1)
            ->where('offer', 1)->orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.product-slider');
    }
}






