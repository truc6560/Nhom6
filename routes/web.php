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

Route::get('/ktra','App\Http\Controllers\ktraController@form');
Route::post('/tinhtuoi','App\Http\Controllers\ktraController@tinhtuoi');


Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");
Route::get("/qlsach/themtheloai","App\Http\Controllers\BookController@them_dl");
Route::get("/qlsach/suatheloai","App\Http\Controllers\BookController@sua_dl");
Route::get("/qlsach/sachkinhdien","App\Http\Controllers\BookController@laysachkinhdien");
Route::get("/qlsach/xoatheloai","App\Http\Controllers\BookController@xoa_dl");
Route::get("/nguyenthibichtram","App\Http\Controllers\ViDuController@btn");