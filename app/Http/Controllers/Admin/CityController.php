<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Country $country)
    {
        $countries = Country::all();
        return view('admin.city.create', compact('country', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate city data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:cities',
            'country_id' => 'required|integer|exists:countries,id',
            'is_active' => 'boolean',
        ]);

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }
        $city = City::create($request->all());

        return redirect()->route('web.city.index')->with('success', 'City created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country, City $city)
    {
        return view('admin.city.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        $countries = Country::all();
        return view('admin.city.edit', compact('city', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        // validate data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:cities,slug,' . $city->id,
            'country_id' => 'required|integer|exists:countries,id',
            'is_active' => 'boolean',
        ]);

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $city->update($request->all());

        return redirect()->route('web.city.index')->with('success', 'City updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return
            redirect()->route('web.city.index')->with('success', 'City updated successfully.');
    }
}
