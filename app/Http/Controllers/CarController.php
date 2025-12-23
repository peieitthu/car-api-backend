<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // GET /api/cars
    public function index()
    {
        return response()->json(Car::all(), 200);
    }

    // POST /api/cars
    public function store(Request $request)
    {
        $validated = $request->validate([
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $car = Car::create($validated);
        return response()->json($car, 201);
    }

    // GET /api/cars/{id}
    public function show(Car $car)
    {
        return response()->json($car, 200);
    }

    // PUT/PATCH /api/cars/{id}
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return response()->json($car, 200);
    }

    // DELETE /api/cars/{id}
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json(['message' => 'Car deleted'], 204);
    }
}
