<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return Review::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validate request
        $request->validate([
            'comment' => 'required | string | max:255',
            'rating' => 'required | integer | min:1 | max:5',
            'business_id' => 'required | exists:businesses,id',
        ]);

        // create new review
        $review = Review::create($request->all());

        // return response
        return response()->json([
            'message' => 'Review created successfully',
            'review' => $review
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {

        // return $review with business and user
        return $review->load('business', 'user');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {

        // validate request
        $request->validate([
            'comment' => 'required | string | max:255',
            'rating' => 'required | integer | min:1 | max:5',
            'business_id' => 'required | exists:businesses,id',
        ]);

        // update review
        $review->update($request->all());

        // return response
        return response()->json([
            'message' => 'Review updated successfully',
            'review' => $review
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        // delete review
        $review->delete();

        // return response
        return response()->json([
            'message' => 'Review deleted successfully',
        ], 200);
    }
}
