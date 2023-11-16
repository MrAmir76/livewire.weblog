<?php

namespace App\Livewire\Page;

use App\Models\Category as CategoryModel;
use Livewire\Component;
use Livewire\WithPagination;


class Category extends Component
{
    use WithPagination;
    public $title;
    public $categoryObj;


    public function mount($slug)
    {
        $this->categoryObj = CategoryModel::where('active', 1)->where('slug', $slug)->first();
        $this->title = $this->categoryObj->name . " | " . env('f_app_name');

    }

    public function render()
    {
        $products = $this->categoryObj->products()
            ->where('active', 1)
            ->orderBy('id', 'Desc')
            ->paginate(6);
        return view('livewire.page.category', ['products' => $products]);
    }
}
