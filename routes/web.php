<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;


require __DIR__.'/auth.php';

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('services', [PageController::class,'services'])->name('services');
Route::get('realisations', [PageController::class,'realisations'])->name('realisations');
Route::get('boutiques', [PageController::class,'boutiques'])->name('boutiques');
Route::get('contact', [PageController::class,'contact'])->name('contact');
Route::post('contact', [PageController::class,'sendMessage'])->name('contact.send');
Route::get('devis', [PageController::class,'devis'])->name('devis');
Route::post('devis', [PageController::class,'postDevis'])->name('devis.send');

Route::get('commander/{product:name}',[PageController::class,'commander'])->name('commander.index');
Route::post('commander',[PageController::class,'commanderStore'])->name('commander.store');

Route::middleware(['auth','role:ADMIN'])->group(function (){
    Route::get('/dashboard',[ProductController::class,'index']);
    Route::get('/products',[ProductController::class,'index'])->name('product.index');
    Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/products',[ProductController::class,'store'])->name('product.store');
    Route::get('/products/{product}',[ProductController::class,'show'])->name('product.show');
    Route::post('/products/{product}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product/{product}',[ProductController::class,'destroy'])->name('product.destroy');

    Route::get('/projects',[ProjetController::class,'index'])->name('project.index');
    Route::get('/projects/create',[ProjetController::class,'create'])->name('project.create');
    Route::post('/projects',[ProjetController::class,'store'])->name('project.store');
    Route::get('/projects/{projet}',[ProjetController::class,'show'])->name('project.show');
    Route::post('/projects/{projet}',[ProjetController::class,'update'])->name('projet.update');
    Route::delete('/projects/{projet}',[ProjetController::class,'destroy'])->name('project.destroy');
});
