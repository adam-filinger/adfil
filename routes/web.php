<?php

use App\Models\Content;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Skill;


// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home old');

// Route::get('/copy', function () {
//     return Inertia::render('WelcomeNew');
// })->name('home new');

// Route::get('/{page}', function ($page) {

//     $skills = null;
//     if ($page === 'about') {
//         $skills = Skill::all();
//     }


//     return view(strtolower($page), [
//         'content'=> Content::where('page', $page)->get(),
//         'skills' =>$skills
//     ]);
// })->name('layout');

Route::get('/home', function (){

    return view('home', [
        'content'=> Content::where('page', 'home')->get()
    ]);
})->name('home');

Route::get('/about', function ()  {
    return view('about', [
        'skills' => Skill::all(),
        'content' => Content::where('page', 'about')->get()
    ]);
})->name('about');

Route::get('/skill/{id}', function ($id)  {
    $skill = Skill::find($id);
    return view('skill', [
        'skill' => $skill
    ]);
})->name('skill');

Route::get('/project/{id}', function ($id)  {
    $project = Project::find($id);
    return view('project', [
        'project' => $project
    ]);
})->name('project');


Route::get('/contact', function (){
    return view('contact', [
        'content' => Content::where('page', 'contact')->get()
    ]);
})->name('contact');


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
