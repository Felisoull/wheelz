<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Car;



Route::get('/cars', [CarController::class, 'index'])->name('car.index');

Route::get('/auto/{car}', [CarController::class, 'show'])->name('car.show');///ВЫВОД
Route::get('/carscreate', [CarController::class, 'create'])->name('car.create');
Route::post('/cars', [CarController::class, 'store'])->name('car.store');//отправка данных с форм //post.store исп-ся для указания форме куда отправить данные

Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('car.edit');
Route::patch('/cars/{car}', [CarController::class, 'update'])->name('car.update');///РЕДАКТИРОВАНИЕ

Route::get('/categorycreate', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');//отправка данных с форм //post.store исп-ся для указания форме куда отправить данные


Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/condition', [ConditionController::class, 'index'])->name('condition.index');
Route::get('/auto', [AutoController::class, 'index'])->name('auto.index');
Route::get('/auto{category}', [AutoController::class, 'index'])->name('carByCategory');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
