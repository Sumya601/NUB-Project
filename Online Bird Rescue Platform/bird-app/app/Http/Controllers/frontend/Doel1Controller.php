<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Doel1Controller extends Controller
{
    public function index(){
        return view('frontend.doel1');
    }
}
