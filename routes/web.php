<?php

use App\Http\Controllers\DailyExpenseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/index', [DailyExpenseController::class, 'index']);
Route::get('/index/{user}', [DailyExpenseController::class, 'show']);
Route::post('/index/create/{user}', [DailyExpenseController::class, 'store']);
Route::get('/index/{dailyExpense}/edit', [DailyExpenseController::class, 'edit']);
Route::put('/index/{dailyExpense}/edit', [DailyExpenseController::class, 'update']);
Route::delete('/index/{dailyExpense}', [DailyExpenseController::class, 'destroy']);


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');