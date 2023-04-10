<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return City::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required|unique:cities,name',
            'slug' => 'required|unique:cities,slug',
            "country_id" => "required|exists:countries,id",
        ]);

        // create new city
        $city = City::create($request->all());

        // return response
        return response()->json([
            'message' => 'City created successfully',
            'city' => $city
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        // return $city with regions
        return $city->load('regions');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        // validate request
        $request->validate([
            'name' => 'required|unique:cities,name,' . $city->id,
            'slug' => 'required|unique:cities,slug,' . $city->id,
            "country_id" => "required|exists:countries,id",
        ]);

        // update city
        $city->update($request->all());

        // return response
        return response()->json([
            'message' => 'City updated successfully',
            'city' => $city
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        // delete city
        $city->delete();

        // return response
        return response()->json([
            'message' => 'City deleted successfully',
        ], 200);
    }
}
