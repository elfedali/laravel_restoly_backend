<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate category data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => 'nullable|string|max:255',
            'position' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
            'language' => 'nullable|string|max:255',
            'parent_id' => 'nullable|integer|exists:categories,id',
        ]);

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon')->store('public/category/icons');
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/category/images');
        }

        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,

            'color' => $request->color,
            'position' => $request->position,
            'is_active' => $request->is_active,
            'locale' => $request->locale,
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('web.category.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // validate category data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => 'nullable|string|max:255',
            'position' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
            'locale' => 'required|string|max:255',
            'parent_id' => 'nullable|integer|exists:categories,id',
        ]);

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }
        if ($request->hasFile('icon')) {
            $request->icon = $request->file('icon')->store('category/icons', 'public');
            if ($category->icon) {
                if (Storage::disk('public')->exists($category->icon)) {
                    Storage::disk('public')->delete($category->icon);
                }
            }
            $category->icon = $request->icon;
        }

        if ($request->hasFile('image')) {
            $request->image = $request->file('image')->store('category/images', 'public');
            if ($category->image) {
                if (Storage::disk('public')->exists($category->image)) {
                    Storage::disk('public')->delete($category->image);
                }
            }
            $category->image = $request->image;
        }

        $category->update($request->all());


        return redirect()->route('web.category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('web.category.index')->with('success', 'Category deleted successfully.');
    }
}
