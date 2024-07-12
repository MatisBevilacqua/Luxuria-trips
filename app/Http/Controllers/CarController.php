<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Image;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('images')->get();
        return view('cars.car', compact('cars'));
    }

    public function showClientCar()
    {
        $cars = Car::all();
        return view('cars.cars', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect()->route('car')->with('success', 'Car updated successfully.');
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('car')->with('success', 'Car deleted successfully.');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'price_per_hour' => 'required|numeric',
            'city' => 'required|string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'nullable|url'
        ]);

        $car = Car::create($request->all());

        if ($request->has('images')) {
            foreach ($request->images as $url) {
                if ($url) {
                    $car->images()->create(['url' => $url]);
                }
            }
        }

        return redirect()->route('car')->with('success', 'Car created successfully.');
    }
}
