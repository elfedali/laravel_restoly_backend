<?php

namespace App\Http\Controllers;


use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pages = Page::all();
        return response()->json($pages);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $page = Page::create($request->validated());
        return response()->json($page);
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return response()->json($page);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $page->update($request->validated());
        return response()->json($page);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return response()->json($page);
    }
}
