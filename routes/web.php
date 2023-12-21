<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Car;




Route::group(['namespace'=> 'Admin','middleware'=>'admin'],function(){
Route::get('/admin/carcreate', [CarController::class, 'create'])->name('car.create');
Route::post('/admin', [CarController::class, 'store'])->name('car.store'); //отправка данных с форм //
Route::get('/admin{car}/edit', [CarController::class, 'edit'])->name('car.edit');
Route::patch('/admin', [CarController::class, 'update'])->name('car.update'); ///РЕДАКТИРОВАНИЕ
Route::get('/admin/categorycreate', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store'); //отправка данных с форм //
Route::get('/admin/order', [OrderController::class, 'index'])->name('order.index');
Route::delete('/admin{car}', [CarController::class, 'destroy'])->name('car.delete');
Route::delete('/admin/{category}', [CategoryController::class, 'destroy'])->name('category.delete'); ///Удаление
Route::delete('/admin/order{order}', [OrderController::class, 'destroy'])->name('order.delete'); ///Удаление
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/condition', [ConditionController::class, 'index'])->name('condition.index');
Route::get('/auto', [AutoController::class, 'index'])->name('auto.index');
Route::get('/auto{category}', [AutoController::class, 'index'])->name('carByCategory');
Auth::routes();

Route::group(['namespace'=> 'User','middleware'=>'user'],function(){
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/auto/{car}/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/auto/create', [OrderController::class, 'store'])->name('order.store');
});


Route::get('/auto/{car}', [CarController::class, 'show'])->name('car.show'); ///ВЫВОД

Route::get('/sitemap', [MapController::class, 'index'])->name('map.index');



