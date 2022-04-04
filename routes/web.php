<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\FrondEndController;
Route::get('/',[FrondEndController::class,'homepage'])->name('home');
Route::get('new-user',[FrondEndController::class,'create'])->name('create.user');

Route::post('save-user',[FrondEndController::class,'save'])->name('save.user');
Route::get('edit-user',[FrondEndController::class,'edit'])->name('edit.user');

//Route::get('about-us',[FrondEndController::class,'aboutus'])->name('about');
//Route::get('contact-us',[FrondEndController::class,'contactus'])->name('contact');




