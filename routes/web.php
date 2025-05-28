<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Task routes
    Route::get('/tarefa', [TaskController::class, 'index'])->name('task.index');
    Route::get('/tarefa/cadastro', [TaskController::class, 'create'])->name('task.create');
    Route::post('/tarefa/cadastro', [TaskController::class, 'store'])->name('task.store');
    Route::delete('/tarefa/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
    Route::get('tarefa/{task}', [TaskController::class, 'edit'])->name('task.edit');
    Route::patch('tarefa/{task}', [TaskController::class, 'update'])->name('task.update');
});

require __DIR__.'/auth.php';
