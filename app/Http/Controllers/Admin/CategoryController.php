<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\Store;
use App\Http\Requests\Category\Update;
use App\Models\Blog\Category;
use App\Queries\CategoryQueryBuilder;

class CategoryController extends Controller
{

    public function __construct(
        private CategoryQueryBuilder $categoryQueryBuilder
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => $this->categoryQueryBuilder->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        $this->categoryQueryBuilder->create($request);

        return redirect(route('admin.categories.index'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, Category $category)
    {
        $this->categoryQueryBuilder->update($request, $category);

        return redirect(route('admin.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->categoryQueryBuilder->delete($category);

        return redirect(route('admin.categories.index'));
    }
}
