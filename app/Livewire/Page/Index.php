<?php

namespace App\Livewire\Page;

use Livewire\Component;

class Index extends Component
{

    public $title;

    public function mount()
    {
        $this->title = 'خانه' . " | " . env('F_APP_NAME');
    }

    public function render()
    {
        return view('livewire.page.index');
    }
}
