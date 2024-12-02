<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'type' => 'required|string',
        'address' => 'required|string',
        'size' => 'required|integer',
        'bedrooms' => 'required|integer',
        'price' => 'required|numeric',
        'latitude' => 'nullable|numeric',
        'longitude' => 'nullable|numeric',
    ]);

    $property = Property::create($validated);

    return response()->json($property, 201);
}





public function index(Request $request)
{
    $properties = Property::query();

    if ($request->has('type')) {
        $properties->where('type', $request->type);
    }
    if ($request->has('bedrooms')) {
        $properties->where('bedrooms', $request->bedrooms);
    }
    if ($request->has('min_price')) {
        $properties->where('price', '>=', $request->min_price);
    }
    if ($request->has('max_price')) {
        $properties->where('price', '<=', $request->max_price);
    }

    return response()->json($properties->get(), 200);
}

public function search(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $radius = $request->input('radius', 10); 

       
        $properties = Property::searchWithinRadius($latitude, $longitude, $radius);

        return response()->json($properties);
    }

}