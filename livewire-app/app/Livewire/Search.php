<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class Search extends Component
{
    public $searchText = '';
    public $results = [];
    public $placeholder;

    public function updatedSearchText($value)
    {
        $this->reset('results');

        $this->validate();

        $searchTerm = "%{$value}%";

        $this->results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    public function clear()
    {
        $this->reset('searchText', 'results');
    }

    public function rules()
    {
        return [
            'searchText' => 'required',
        ];
    }

    public function render()
    {
        return view('livewire.search');
    }
}
