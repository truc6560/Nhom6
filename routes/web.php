<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ViDuController;

Route::get("/nguyenthibichtram","App\Http\Controllers\ViDuController@btnn");


Route::get("/xephangdoanhthu","App\Http\Controllers\ViDuController@toprevenues"); 
Route::get("/xephangtop10","App\Http\Controllers\ViDuController@longmovies");
Route::get("/bophimCanada","App\Http\Controllers\ViDuController@phimCanada");
Route::get("/xephangtop10","App\Http\Controllers\ViDuController@topmovies");
Route::get("/phim","App\Http\Controllers\ViDuController@longmovies");
Route::get("dsgenre","App\Http\Controllers\ViDuController@ds");


Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');

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


//giờ thử xem có chạy được không nhé!!


// giờ thử cái của t nè coi có hiện cái của m không nhaa


