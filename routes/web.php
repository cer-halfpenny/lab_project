<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';

Route::get('/', function() {
    return 'Welcome to Axolotl Advantures';
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/greet/{name}', function ($name) {
    return view('greet', ['name' => $name]);
});

// When a user visits /axolotls, run AxolotlController@index and call this route "axolotls.index"
use App\Http\Controllers\AxolotlController;

Route::get('/axolotls', [AxolotlController::class, 'index'])->name('axolotls.index');

// Route that returns JSON results for autocomplete
Route::get('/axolotls/search', [AxolotlController::class, 'search'])
    ->name('axolotls.search');
