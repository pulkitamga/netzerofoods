<?php

namespace App\Http\Controllers;

// use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view('welcome');
    }
    public function showNetZeroMarkets()
{
    return view('NetZeroMarket');
}
public function showSustainableEating()
{
    return view('EatingWithTheSeason');
}
public function showEnergyConsumption()
{
    return view('ReduceEnergyConsumption');
}
public function TestHome()
{
    return view('test-home');
}
}