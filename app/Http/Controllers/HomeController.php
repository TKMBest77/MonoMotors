<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $cars = Car::get();
        $brands = Car::all()->unique('brand');

        return view('home')->with([
            'cars' => $cars,
            'brands' => $brands,
        ]);
    }  
}
