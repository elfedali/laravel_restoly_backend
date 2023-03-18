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
        return $this->success($pages);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $page = Page::create($request->validated());
        return $this->success($page);
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return $this->success($page);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $page->update($request->validated());
        return $this->success($page);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return $this->success($page);
    }

    private function success($data)
    {
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}
