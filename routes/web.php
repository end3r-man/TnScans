<?php

use App\Livewire\Home\IndexPg;
use Illuminate\Support\Facades\Route;

/*==================Guest Routes==================*/
Route::group(['/'], function () {
    Route::get('/', IndexPg::class)->name('index');
});