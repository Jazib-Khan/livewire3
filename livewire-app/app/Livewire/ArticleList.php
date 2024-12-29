<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Session;
use App\Models\Article;
use Livewire\WithPagination;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use withPagination;

    #[Session(key: 'published')]
    public $showOnlyPublished = false;

    #[Computed/*(persist: true)*/]
    public function articles()
    {
        $query = Article::query();

        if ($this->showOnlyPublished) {
            $query->where('published', 1);
        }

        return $query->paginate(10, pageName: 'articles-page');
    }

    public function delete(Article $article)
    {
        if ($this->articles->count() < 10 ) {
            throw new \Exception("Nope");
        }

        $article->delete();
        unset($this->articles);
        cache()->forget('published-count');
    }

    public function togglePublished($showOnlyPublished)
    {
        $this->showOnlyPublished = $showOnlyPublished;
        $this->resetPage(pageName: 'articles-page');
    }
}
