<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{

    public $searchInput = '';


    public function updatedSearchInput(): void
    {
        $this->search();
    }


    public function mount(): void
    {
        $url = explode('/', url()->current());
        if (count($url) > 3 and $url[3] == 'search') {
            $this->searchInput = urldecode($url[4]);
        }
    }

    public function search(): void
    {
        $this->validate(['searchInput' => 'required|string|min:2']);
        $this->redirect(route('search',
            ['params' => $this->searchInput]), true);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
