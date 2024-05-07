<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/services',[PageController::class,'services'])->name('services');
Route::get('/contact',[PageController::class,'contact'])->name('contact');

Route::post('contact-us',[PageController::class,'ContactUS'])->name('contact-us');