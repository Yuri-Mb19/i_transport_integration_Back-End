<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirportTransferController extends Controller
{
    public function airport() {

        return view('site.airport');
    }
}
