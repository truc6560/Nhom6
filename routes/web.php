<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ViDuController;

Route::get("/dien","App\Http\Controllers\ViDuController@hihi");

Route::get("/truc","App\Http\Controllers\ViDuController@test1");

Route::get("/phanthingoc","App\Http\Controllers\ViDuController@test2");

Route::get("nguyenbuiminhtu","App\Http\Controllers\ViDuController@btn");

Route::get("/nguyenthibichtram","App\Http\Controllers\ViDuController@btnn");
Route::get("/xephangtop10","App\Http\Controllers\ViDuController@topmovies");
Route::get("/phimdai","App\Htpp\Controllers\ViDuController@getLongMovies");

Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');
Route::get('/sach/theloai/{id_loai}', 'App\Http\Controllers\ViduLayoutController@sachTheoTheLoai');

