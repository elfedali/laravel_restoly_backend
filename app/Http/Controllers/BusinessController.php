<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Business::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusinessRequest $request)
    {
        return  Business::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        return $business;
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusinessRequest $request, Business $business)
    {
        $business->update($request->validated());
        return $business;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {


        if ($business->delete()) {
            return response()->json([
                'message' => 'Business deleted successfully'
            ]);
        }

        return response()->json([
            'message' => 'Business could not be deleted'
        ], 500);
    }
}
