<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class AdminCategoryTable extends Component
{

    public $categories;

    protected $listeners = ['updateCategoriesTable'];


    public function deleteCategory($categoryId)
    {
        Category::query()->find($categoryId)->delete();
        session()->flash('alert', 'دسته‌بندی حذف شد.');
        $this->redirect(route('auth.categories'), 1);
    }

    public function updateCategoriesTable()
    {
        $this->mount();
    }

    public function mount()
    {
        $this->categories = Category::all()->sortByDesc('id');
    }

    public function render()
    {
        return view('livewire.admin-category-table');
    }
}
