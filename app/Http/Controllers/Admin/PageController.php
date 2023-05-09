<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validate data
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'position' => 'required|integer',
            'locale' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $page = Page::create($request->all());

        return redirect()->route('web.page.index')->with('success', 'Page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('admin.page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        // validate page data
        //validate data
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'position' => 'required|integer',
            'locale' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);
        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        $page->update($request->all());
        return redirect()->route('web.page.index')->with('success', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('web.page.index')->with('success', 'Page deleted successfully.');
    }
}
