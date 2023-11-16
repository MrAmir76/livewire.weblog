<?php

namespace App\Livewire;

use App\Models\Slider as SliderModel;
use Livewire\Component;

class Slider extends Component
{


    public $sliders;


    public function mount()
    {
        $this->sliders = SliderModel::where('active', 1)->orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.slider');
    }
}
