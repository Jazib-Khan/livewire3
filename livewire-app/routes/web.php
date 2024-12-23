<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use App\Livewire\ArticleIndex;
use App\Livewire\Dashboard;
use App\Livewire\ArticleList;
use App\Livewire\CreateArticle;
use App\Livewire\EditArticle;

Route::get('/', ArticleIndex::class );

/* Route::get('/search', Search::class); */

Route::get('/articles/{article}', ShowArticle::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/articles', ArticleList::class);
Route::get('/dashboard/articles/create', CreateArticle::class);
Route::get('/dashboard/articles/{article}/edit', EditArticle::class);
