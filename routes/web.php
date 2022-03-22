<?php

use App\Http\Controllers\CheckerController;
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
    return view('auth.login');
});

Route::middleware('auth')->group(function ()
{
    Route::get('show', [CheckerController::class, 'show']);
    Route::post('check_id', [CheckerController::class, 'check_id']);
    Route::get('data_entry', [CheckerController::class, 'data_entry']);
});
