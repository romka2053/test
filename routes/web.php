<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreeStaffController;
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

Route::get('/', [TreeStaffController::class,'index'] );

Route::get('/admin', [\App\Http\Controllers\AdminController::class,'admin'] );

