<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::paginate(20);

        return view('cars.index')->with([
            'cars' => $cars,
        ]);
    }

    public function show($id) {
        $car = Car::where('id', $id)->first();
        return view('cars.show')->with([
            'car' => $car,
        ]);
    }

    public function create() {
        return view('cars.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'kuzow' => 'required|string|max:255',
            'color' => 'nullable|string|max:255',
            'status_id' => 'required|string|max:255',
            'year' => 'required|integer|min:2022',
            'transmission' => 'nullable|string|max:255',
            'drive' => 'required|string|max:255',
            'motor' => 'required|numeric|between:2,5',
            'is_new' => 'nullable|boolean',
            'price' => 'required|integer|min:15000',
            'description' => 'nullable|string|max:255',
        ]);

        $validated['is_new'] = $request->has('is_new');

        Car::create($validated);

        return to_route('cars.index')->with([
            'success' => 'Car added successfully',
        ]);
    }
}
