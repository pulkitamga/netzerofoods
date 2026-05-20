<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplypitchController extends Controller
{
    public function index()
    {
        return view('applypitch');
    }
}