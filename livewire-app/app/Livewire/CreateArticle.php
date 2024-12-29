<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreateArticle extends AdminComponent
{
    use WithFileUploads;

    public ArticleForm $form;

    public function save()
    {
        $this->form->store();

        $this->redirectRoute('dashboard.articles.index', navigate: true);
    }
    public function render()
    {
        return view('livewire.create-article');
    }
}
