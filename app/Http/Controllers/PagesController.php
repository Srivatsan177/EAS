<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages/index');
    }
    public function about(){
        return view('pages/about');
    }
    public function dindex()
    {
        return view('department/index');
    }
    public function mindex()
    {
        return view('department/team/index');
    }
}
