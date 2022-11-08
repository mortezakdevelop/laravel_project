<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function test(){
        dd("this is var dump for test method");
        return "<h1> this page is test</h1>";
    }

    public function slider($username, $password){
         dd($username,$password);
    }

    public function page($name = null,$age = null){
        return "<h1>we are in page, name is $name and age is $age</h1>";
    }
}
