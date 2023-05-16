<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businesses = Business::all();
        return view('admin.business.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('admin.business.create', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate business data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:businesses',
            'description' => 'nullable|string',
            'phone_one' => 'nullable|string|max:255',
            'phone_two' => 'nullable|string|max:255',
            "is_verified" => "nullable|boolean",
            "is_active" => "nullable|boolean",
            "is_without_reservation" => "nullable|boolean",

            "address" => "nullable|string|max:255",
            "city" => "nullable|string|max:255",
            "zip_code" => "nullable|string|max:255",
            "country" => "nullable|string|max:255",

            "latitude" => "nullable|string|max:255",
            "longitude" => "nullable|string|max:255",

            "logo" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "website" => "nullable|string|max:255",
            "facebook" => "nullable|string|max:255",
            "twitter" => "nullable|string|max:255",
            "instagram" => "nullable|string|max:255",
            "linkedin" => "nullable|string|max:255",
            "youtube" => "nullable|string|max:255",
            "tiktok" => "nullable|string|max:255",
            "whatsApp" => "nullable|string|max:255",

            'user_id' => 'required|integer|exists:users,id',
            'category_id' => 'required|integer|exists:categories,id',
        ]);


        if ($request->is_verified == 'on') {
            $request->is_verified = true;
        } else {
            $request->is_verified = false;
        }

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        if ($request->is_without_reservation == 'on') {
            $request->is_without_reservation = true;
        } else {
            $request->is_without_reservation = false;
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('businesses/logos', 'public');
        }

        $business = Business::create(request()->all());

        return redirect()->route('web.business.index')->with('success', 'Business created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        return view('admin.business.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        return view('admin.business.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business $business)
    {
        // validate business data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:businesses,slug,' . $business->id,
            'description' => 'nullable|string',
            'phone_one' => 'nullable|string|max:255',
            'phone_two' => 'nullable|string|max:255',
            "is_verified" => "nullable|boolean",
            "is_active" => "nullable|boolean",
            "is_without_reservation" => "nullable|boolean",

            "address" => "nullable|string|max:255",
            "city" => "nullable|string|max:255",
            "zip_code" => "nullable|string|max:255",
            "country" => "nullable|string|max:255",

            "latitude" => "nullable|string|max:255",
            "longitude" => "nullable|string|max:255",

            "logo" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "website" => "nullable|string|max:255",
            "facebook" => "nullable|string|max:255",
            "twitter" => "nullable|string|max:255",
            "instagram" => "nullable|string|max:255",
            "linkedin" => "nullable|string|max:255",
            "youtube" => "nullable|string|max:255",
            "tiktok" => "nullable|string|max:255",
            "whatsApp" => "nullable|string|max:255",

            'user_id' => 'required|integer|exists:users,id',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        if ($request->is_verified == 'on') {
            $request->is_verified = true;
        } else {
            $request->is_verified = false;
        }

        if (
            $request->is_active == 'on'
        ) {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        if ($request->is_without_reservation == 'on') {
            $request->is_without_reservation = true;
        } else {
            $request->is_without_reservation = false;
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('businesses/logos', 'public');
        }

        $business->update(request()->all());

        return redirect()->route('web.business.index')->with('success', 'Business updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        $business->delete();
        return redirect()->route('web.business.index')->with('success', 'Business deleted successfully');
    }
}
