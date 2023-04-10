<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Menu::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request 
        //"name",
        // "slug",
        // "description",
        // "icon",
        // "image",
        // "color",
        // "position",
        // "is_active",
        // "business_id"
        $request->validate([

            'name' => 'required|string|unique:menus,name',
            'slug' => 'required|unique:menus,slug',
            'description' => 'string | nullable',
            'icon' => 'string   | nullable',
            'image' => 'string | nullable',
            'color' => 'string | nullable',
            'position' => 'integer | nullable',
            'is_active' => 'boolean | nullable',
            'business_id' => 'required|exists:businesses,id',

        ]);

        // create new menu
        $menu = Menu::create($request->all());

        // return response

        return response()->json([
            'message' => 'Menu created successfully',
            'menu' => $menu
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        // return $menu with items
        return $menu->load('dishes');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        // validate request
        $request->validate([
            'name' => 'required|string|unique:menus,name,' . $menu->id,
            'slug' => 'required|unique:menus,slug,' . $menu->id,
            'description' => 'string | nullable',
            'icon' => 'string   | nullable',
            'image' => 'string | nullable',
            'color' => 'string | nullable',
            'position' => 'integer | nullable',
            'is_active' => 'boolean | nullable',
            'business_id' => 'required|exists:businesses,id',
        ]);

        // update menu
        $menu->update($request->all());

        // return response

        return response()->json([
            'message' => 'Menu updated successfully',
            'menu' => $menu
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // delete menu
        $menu->delete();

        // return response

        return response()->json([
            'message' => 'Menu deleted successfully',
        ], 200);
    }
}
