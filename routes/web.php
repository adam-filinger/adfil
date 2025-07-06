<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Skills;



Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home old');

Route::get('/copy', function () {
    return Inertia::render('WelcomeNew');
})->name('home new');

Route::get('/home', function (){
    return view('home');
})->name('home');

Route::get('/about', function ()  {
    return view('about', [
        'skills' => Skills::all()
    ]);
})->name('about');

Route::get('/skill/{id}', function ($id)  {
    $skill = Skills::find($id);
    return view('skill', [
        'skill' => $skill
    ]);
})->name('skill');


Route::get('/contact', function (){
    return view('contact');
})->name('contact');


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
