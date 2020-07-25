<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThirdController extends Controller
{

    public function getIndex()
    {

        $obj = new \stdClass();
        $obj->name='hesham';
        $obj->age=48;
        return view('welcome',compact('obj'));
//        return view('welcome');
    }
}
