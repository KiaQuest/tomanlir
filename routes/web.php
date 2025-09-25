<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware(['auth', 'auth.session'])->group(function () {
//    Route::get('/', function () {
//        // ...
//    });

    Route::get('/profile',[userController::class,'show'])->name('profile');
    Route::get('/profile-edit',[userController::class,'edit'])->name('profile.edit');
    Route::post('/profile-edit',[userController::class,'update'])->name('profile.edit.action');

    Route::get('/wallet',[WalletController::class,'index'])->name('wallet');
    Route::get('/wallet-increase',[WalletController::class,'indexIncrease'])->name('wallet.increase');
    Route::post('/wallet-increase/key',[WalletController::class,'indexIncrease2'])->name('wallet.increase2');
//    Route::get('/profile-edit',[userController::class,'edit'])->name('profile.edit');
    Route::post('/wallet-action',[WalletController::class,'create'])->name('wallet.increase.action');

});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/login',[AdminController::class,'login'])->name('admin.login.action');
//Route::get('/', function () {})->name('home');


Route::get('/signup',[\App\Http\Controllers\userController::class,'index'])->name('signup');
Route::post('/signup',[\App\Http\Controllers\userController::class,'create'])->name('signup.action');

Route::get('/login',[\App\Http\Controllers\userController::class,'loginpage'])->name('login');
Route::post('/login',[\App\Http\Controllers\userController::class,'loginact'])->name('login.action');
//Route::get('/',[\App\Http\Controllers\homeController::class,'index'])->name('prof');

Route::get('/logout',[\App\Http\Controllers\userController::class,'logout'])->name('logout');

