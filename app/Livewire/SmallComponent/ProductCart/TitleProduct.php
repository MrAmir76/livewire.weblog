<?php

namespace App\Livewire\SmallComponent\ProductCart;

use Livewire\Component;

class TitleProduct extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.small-component.product-cart.title-product');
    }
}
