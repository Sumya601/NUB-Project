<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sparrow1Controller extends Controller
{
    public function index(){
        return view('frontend.sparrow1');
    }
}
