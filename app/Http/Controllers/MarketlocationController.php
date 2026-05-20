<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketlocationController extends Controller
{
    public function index()
    {
        return view('marketlocation');
    }
}