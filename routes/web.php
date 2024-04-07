<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/inicio', function () {
    return view('home');
})->name('inicio');

Route::get('/cursos', function () {
    return view('cursos');
})->name('cursos');

Route::get('/instituicao', function () {
    return view('instituicao');
})->name('instituicao');

Route::get('/departamentos', function () {
    return view('departamentos');
})->name('departamentos');

Route::get('/oportunidades', function () {
    return view('oportunidades');
})->name('oportunidades');

Route::get('/vestibulinho', function () {
    return view('vestibulinho');
})->name('vestibulinho');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
