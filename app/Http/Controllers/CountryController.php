<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Country::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required|unique:countries,name',
            'code' => 'required|unique:countries,code',
            "phone_code" => "required|unique:countries,phone_code",
            "currency" => "required|unique:countries,currency",
            "currency_symbol" => "required|unique:countries,currency_symbol",

        ]);

        // create new country
        $country = Country::create($request->all());

        // return response
        return response()->json([
            'message' => 'Country created successfully',
            'country' => $country
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        // return $country with cities
        return $country->load('cities');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {

        // validate request
        $request->validate([
            'name' => 'required|unique:countries,name,' . $country->id,
            'code' => 'required|unique:countries,code,' . $country->id,
            "phone_code" => "required|unique:countries,phone_code," . $country->id,
            "currency" => "required|unique:countries,currency," . $country->id,
            "currency_symbol" => "required|unique:countries,currency_symbol," . $country->id,

        ]);

        // update country
        $country->update($request->all());

        // return response
        return response()->json([
            'message' => 'Country updated successfully',
            'country' => $country
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        if ($country->cities()->count() > 0) {
            return response()->json([
                'message' => 'Country has cities, you can not delete it',
            ], 400);
        }

        // delete country
        if ($country->delete()) {
            // return response
            return response()->json([
                'message' => 'Country deleted successfully',
            ], 200);
        } else {
            // return response
            return response()->json([
                'message' => 'Country not deleted',
            ], 400);
        }
    }
}
