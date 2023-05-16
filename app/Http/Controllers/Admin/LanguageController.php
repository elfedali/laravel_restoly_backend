<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
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
        $languages = Language::all();
        return view('admin.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate language data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:languages',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $language = Language::create($request->all());

        return redirect()->route('web.language.index')->with('success', 'Language created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        return view('admin.languages.show', compact('language'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        //
        return view('admin.languages.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        // validate language data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:languages,slug,' . $language->id,
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $language->update($request->all());

        return redirect()->route('web.language.index')->with('success', 'Language updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        //
        $language->delete();
        return redirect()->route('web.language.index')->with('success', 'Language deleted successfully.');
    }
}
