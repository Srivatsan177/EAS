<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //return "Hello World";
        //$title='Eas';
        return view('pages.index');
    }
}
