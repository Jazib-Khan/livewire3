<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Search;
use App\Livewire\ShowArticle;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', Search::class);

Route::get('/articles/{article}', ShowArticle::class);
