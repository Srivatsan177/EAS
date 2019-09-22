<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthsController extends Controller
{
    public function login(Request $request){
        return view($request);
    }
}
