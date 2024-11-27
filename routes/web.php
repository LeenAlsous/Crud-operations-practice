<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cats_home', [CatController::class,'index'])->name('cats_home.index');
// Route::get('/cats_home/create', [CatController::class, 'create'])->name('cats_home.create');
// Route::get('/cats_home/{catId}', [CatController::class,'show'])->name('cats_home.show');
// Route::post('/cats_home', [CatController::class,'store'])->name('cats_home.store');
// Route::get('/cats_home/{catId}/edit', [CatController::class,'edit'])->name('cats_home.edit');
// Route::put('/cats_home/{catId}', [CatController::class, 'update'])->name('cats_home.update');
// Route::delete('/cats_home/{catId}', [CatController::class,'destroy'])->name('cats_home.destroy');
Route::resource('/cats_home', CatController::class);
