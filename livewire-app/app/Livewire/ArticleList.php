<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Article;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    public function delete(Article $article)
    {
        $article->delete();
    }

    public function render()
    {
        return view('livewire.article-list', [
            'articles' => Article::all(),
        ]);
    }
}
