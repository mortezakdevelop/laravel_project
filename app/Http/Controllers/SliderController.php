<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function test(){
        dd("this is var dump for test method");
        return "<h1> this page is test</h1>";
    }

    public function slider(){
         return "this page is slider";
    }
}
