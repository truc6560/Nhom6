<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

use App\Http\Controllers\ViDuController;

Route::get("/dien","App\Http\Controllers\ViDuController@hihi");

Route::get("/truc","App\Http\Controllers\ViDuController@test1");

Route::get("/phanthingoc","App\Http\Controllers\ViDuController@test2");

Route::get("/nguyenthibichtram","App\Http\Controllers\ViDuController@btnn");

Route::get("/xephangtop10","App\Http\Controllers\ViDuController@topmovies");
Route::get("/phim","App\Http\Controllers\ViDuController@topmovies");

Route::get("/xephangdoanhthu","App\Http\Controllers\ViDuController@toprevenues"); 

Route::get("/xephangtop10","App\Http\Controllers\ViDuController@longmovies");

Route::get("/bophimCanada","App\Http\Controllers\ViDuController@phimCanada");


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

Route::get("/bophimCanada","App\Http\Controllers\ViDuController@phimCanada");


//giờ thử xem có chạy được không nhé!!


// giờ thử cái của t nè coi có hiện cái của m không nhaa

