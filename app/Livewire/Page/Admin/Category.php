<?php

namespace App\Livewire\Page\Admin;

use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.page.admin.category')->layout('components.layouts.auth');
    }
}
