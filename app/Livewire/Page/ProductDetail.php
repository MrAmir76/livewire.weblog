<?php

namespace App\Livewire\Page;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{

    public $product;
    public $title;


    public function mount($id)
    {
        $this->product = Product::query()->where('active', 1)->findOrFail($id);
        $this->title = optional($this->product)->name . ' | ' . env('f_app_name');
    }

    public function render()
    {
        return view('livewire.page.product-detail');
    }
}
