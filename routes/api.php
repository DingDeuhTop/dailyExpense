<?php

use App\Http\Controllers\DailyExpenseController;
use App\Models\DailyExpense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/index', [DailyExpenseController::class, 'index']);
Route::post('/index/create/{user}', [DailyExpenseController::class, 'store']);
Route::post('/enter', [DailyExpenseController::class, 'enteranything']);