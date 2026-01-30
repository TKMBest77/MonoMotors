<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $cars = Car::get();

        return view('home')->with([
            'cars' => $cars,
        ]);
    }  
}
