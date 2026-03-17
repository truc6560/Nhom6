<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get("/dien","App\Http\Controllers\ViDuController@hihi");

Route::get("/truc","App\Http\Controllers\ViDuController@test1");

Route::get("/phanthingoc","App\Http\Controllers\ViDuController@test2");

Route::get("nguyenbuiminhtu","App\Http\Controllers\ViDuController@btn");

Route::get("/nguyenthibichtram","App\Http\Controllers\ViDuController@btnn");

