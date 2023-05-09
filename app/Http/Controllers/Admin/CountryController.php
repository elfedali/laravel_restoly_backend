<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();

        return view('admin.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:countries',
            'code' => 'required|string|max:255|unique:countries',
            // 'flag' => 'required|string|max:255',
            'phone_code' => 'required|string|max:255',
            'currency' => 'required|string|max:255',
            'currency_symbol' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        /*  if ($request->hasFile('flag')) {
            $request->file('flag')->store('public/flags');
        }
 */
        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $country = Country::create($request->all());

        return redirect()->route('web.country.index')->with('success', 'Country created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {

        return view('admin.country.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('admin.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        // validate data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:countries,slug,' . $country->id,
            'code' => 'required|string|max:255|unique:countries,code,' . $country->id,
            // 'flag' => 'required|string|max:255',
            'phone_code' => 'required|string|max:255',
            'currency' => 'required|string|max:255',
            'currency_symbol' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        /*  if ($request->hasFile('flag')) {
            $request->file('flag')->store('public/flags');
        } */

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $country->update($request->all());

        return redirect()->route('web.country.index')->with('success', 'Country updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('web.country.index')->with('success', 'Country deleted successfully.');
    }
}
