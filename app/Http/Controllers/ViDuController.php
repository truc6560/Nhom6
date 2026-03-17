<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller
{
    function test(){
    $name = "HUB";
    return view('test', ["name1"=>$name]);
 }

  function btn(){
    return "Nguyen Bui Minh Tu";
 }


    function btnn(){
        return "Nguyễn Thị Bích Trâm";
    }
}

