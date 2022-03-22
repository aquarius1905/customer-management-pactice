<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
//入力ページ
Route::get('/', [CustomerController::class, 'index'])->name('index');
//確認ページ
Route::post('/confirm', [CustomerController::class, 'confirm'])->name('confirm');
//送信完了ページ
Route::post('/complete', [CustomerController::class, 'send'])->name('send');
//顧客管理画面
Route::get('/management', [CustomerController::class, 'getCustomers'])->name('getCustomers');
//顧客検索
Route::get('/search', [CustomerController::class, 'search'])->name('search');
//バリデーション練習用
Route::get('/password', [CustomerController::class, 'password'])->name('password');
