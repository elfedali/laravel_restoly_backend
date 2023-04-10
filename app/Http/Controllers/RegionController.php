<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Region::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required|unique:regions,name',
            'slug' => 'required|unique:regions,slug',
            "city_id" => "required|exists:cities,id",
        ]);

        // create new region
        $region = Region::create($request->all());

        // return response
        return response()->json([
            'message' => 'Region created successfully',
            'region' => $region
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        // return $region with city
        return $region->load('city');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region)
    {
        // validate request
        $request->validate([
            'name' => 'required|unique:regions,name,' . $region->id,
            'slug' => 'required|unique:regions,slug,' . $region->id,
            "city_id" => "required|exists:cities,id",
        ]);

        // update region
        $region->update($request->all());

        // return response
        return response()->json([
            'message' => 'Region updated successfully',
            'region' => $region
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        // delete region
        $region->delete();

        // return response
        return response()->json([
            'message' => 'Region deleted successfully',
        ], 200);
    }
}
