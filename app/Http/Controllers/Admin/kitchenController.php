<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kitchen;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin|super-admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kitchens = kitchen::all();
        return view('admin.kitchen.index', compact('kitchens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kitchen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate kitchen data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:kitchens',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
            'language' => 'nullable|string|max:255',
        ]);
        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $kitchen = kitchen::create($request->all());

        return redirect()->route('web.kitchen.index')->with('success', 'kitchen created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(kitchen $kitchen)
    {
        return view('admin.kitchen.show', compact('kitchen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kitchen $kitchen)
    {
        return view('admin.kitchen.edit', compact('kitchen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kitchen $kitchen)
    {

        // validate kitchen data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:kitchens,slug,' . $kitchen->id,
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
            'language' => 'nullable|string|max:255',
        ]);
        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $kitchen->update($request->all());

        return redirect()->route('web.kitchen.index')->with('success', 'kitchen updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kitchen $kitchen)
    {

        $kitchen->delete();
        return redirect()->route('web.kitchen.index')->with('success', 'kitchen deleted successfully');
    }
}
