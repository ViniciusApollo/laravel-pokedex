<?php

use App\Http\Controllers\site\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'search'])->name('site.home.index');
