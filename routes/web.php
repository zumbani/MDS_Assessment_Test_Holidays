<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolidayController;
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

Route::get('/', [HolidayController::class, 'index']);
Route::get('holidays/list', [HolidayController::class, 'getHolidays'])->name('holidays.list');
Route::get('holidays/pdf', [HolidayController::class, 'holidaysPdf'])->name('holidays.pdf');
