<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index() {
        $brands = Car::get()->unique('brand');

        return view('brands.index')->with([
            'brands' => $brands,
        ]);
    }

    public function show($brand) {
        $cars = Car::where('brand', $brand)->get();

        return view('brands.show')->with([
            'cars' => $cars,
            'brand' => $brand,
        ]);
    }
}
