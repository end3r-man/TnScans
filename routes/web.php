<?php

use App\Livewire\Home\IndexPg;
use App\Livewire\Home\DiscoverPg;
use Illuminate\Support\Facades\Route;

/*==================Guest Routes==================*/
Route::group(['/'], function () {
    Route::get('/', IndexPg::class)->name('index');
    Route::get('discover', Discoverpg::class)->name('discover');
});