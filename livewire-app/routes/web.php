<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use App\Livewire\ArticleIndex;

Route::get('/', ArticleIndex::class );

/* Route::get('/search', Search::class); */

Route::get('/articles/{article}', ShowArticle::class);
