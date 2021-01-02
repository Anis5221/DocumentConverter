<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index (){

        return view('convertPages.videotoaudio');
    }

    public function videoConvert(Request $request){
        echo "this video page";
    }
}
