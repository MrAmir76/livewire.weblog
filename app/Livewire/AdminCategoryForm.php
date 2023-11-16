<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class AdminCategoryForm extends Component
{

    public $categoryName;
    public $categorySlug;
    public $categoryParent;
    public $isActive = 0;
    public $hasChildren = 0;
    public $categoryId;


    protected $listeners = ['updateFrom'];

    public function updateFrom($categoryId)
    {
        $category = Category::query()->findOrFail($categoryId);
        $this->categoryId = $categoryId;
        $this->categoryName = $category->name;
        $this->categorySlug = $category->slug;
        $this->categoryParent = $category->parent_id;
        $this->hasChildren = $category->has_children;
        $this->isActive = $category->active;
    }


    public function save()
    {
        $validated = $this->validate([
            'categoryName' => 'required|string|min:4',
            'categorySlug' => 'required|regex:/^[a-zA-Z0-9_-]+$/|unique:categories,slug,' . $this->categoryId,
            'categoryParent' => 'nullable|exists:categories,id',
            'isActive' => 'in:1,0',
            'hasChildren' => 'in:1,0',
        ]);
        $cleanData = [
            'name' => $validated['categoryName'],
            'slug' => $validated['categorySlug'],
            'parent_id' => $validated['categoryParent'],
            'has_children' => boolval($validated['hasChildren']),
            'active' => boolval($validated['isActive'])];
        $alert = '';


        if (isset($this->categoryId)) {
            Category::query()->findOrFail($this->categoryId)->update($cleanData);
            $alert = 'دسته‌بندی بروزرسانی شد';
        } else {
            Category::query()->create($cleanData);
            $alert = 'دسته‌بندی جدید اضافه شد';
        }

        session()->flash('alert', $alert);
        $this->reset([
            'categoryName', 'categorySlug', 'categoryParent',
            'isActive', 'hasChildren', 'categoryId']);
        $this->redirect(route('auth.categories'), 1);
    }

    public function render()
    {
        $categoryList = Category::query()->where('active', 1)->pluck('name', 'id');
        return view('livewire.admin-category-form', compact('categoryList'));
    }
}
