<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use App\Livewire\ArticleIndex;
use App\Livewire\Dashboard;
use App\Livewire\ArticleList;

Route::get('/', ArticleIndex::class );

/* Route::get('/search', Search::class); */

Route::get('/articles/{article}', ShowArticle::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/articles', ArticleList::class);
