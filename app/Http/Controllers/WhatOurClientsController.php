<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatOurClientsController extends Controller
{
    public function what(){
        return view('site.what');
    }
}
