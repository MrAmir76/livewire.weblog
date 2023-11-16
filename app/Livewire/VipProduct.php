<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class VipProduct extends Component
{
    public $vipProduct;


    public function mount()
    {
        $this->vipProduct = Product::where('vip', true)->first();
    }

    public function render()
    {
        return view('livewire.Vip-product');
    }
}
