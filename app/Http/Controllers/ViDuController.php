<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViDuController extends Controller
{
    function test(){
    $name = "HUB";
    return view('test', ["name1"=>$name]);
 }
}
    function test2(){
      return "Phan Th? Ng?c";
     }

    function btn(){
     return "Nguyen Bui Minh Tu";
    }

    function btnn(){
      return "Nguy?n Th? Bích Trâm";
    }
    function phimCanada(){
        $phim = DB::table('movie')->where('country_name', 'Canada')->get();
        return view('canada', compact('phim'));
    }
}

    function hihi() {
      return "Nguy?n Lê Ki?u Duyên";
    }
    function test1() {
      return "Nguy?n Ng?c B?o Trúc";
    }
//7.3
    function topmovies()
    {
        $movies = DB::table("movie")
                    ->select("movie_name", "release_date", "vote_average")
                    ->orderBy("vote_average", "desc")
                    ->take(10)
                    ->get();

        return view("topmovies", compact("movies"));
    }
//7.4
    public function longmovies()
    {
        $movies = DB::table('movie')
                    ->where('runtime', '>', 120)
                    ->limit(10)
                    ->get();

        return view('longmovies', compact('movies'));
    }
   }
