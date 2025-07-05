<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home old');

Route::get('/copy', function () {
    return Inertia::render('WelcomeNew');
})->name('home new');

Route::get('/home', function (){
    return view('home');
})->name('home');

Route::get('/about', function (){
    return view('about', [
        'skills' => [
            ['id' => 1, 'name' => 'PHP'],
            ['id' => 2, 'name' => 'Laravel'],
            ['id' => 3, 'name' => 'Vue.js'],
            ['id' => 4, 'name' => 'Tailwind CSS'],
            ['id' => 5, 'name' => 'JavaScript'],
            ['id' => 6, 'name' => 'HTML/CSS']

        ]
    ]);
})->name('about');

Route::get('/skill/{id}', function ($id){
    $skills = [
            ['id' => 1, 'name' => 'PHP', 'length' => '3 years', "projects" => 'Project A, Project B'],
            ['id' => 2, 'name' => 'Laravel', 'length' => '2 years', "projects" => 'Project C, Project D'],
            ['id' => 3, 'name' => 'Vue.js', 'length' => '1 year', "projects" => 'Project E, Project F'],
            ['id' => 4, 'name' => 'Tailwind CSS', 'length' => '1 year', "projects" => 'Project G, Project H'],
            ['id' => 5, 'name' => 'JavaScript', 'length' => '4 years', "projects" => 'Project I, Project J'],
            ['id' => 6, 'name' => 'HTML/CSS', 'length' => '5 years', 'projects' => 'Project K, Project L'],

    ];

    $skill = Arr::first($skills, fn($skills) => $skills['id'] == $id);
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
