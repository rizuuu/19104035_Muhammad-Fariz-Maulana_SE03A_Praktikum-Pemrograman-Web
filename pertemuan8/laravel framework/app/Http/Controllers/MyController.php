<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view('beranda');
    }

    public function about(){
        return view('about');
    }
}
