<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleServiceController extends Controller
{
    public function single() {

        return view('site.single');
    }
}
