<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Queries\CategoriesQueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoriesQueryBuilder $builder)
    {
        return view('admin.categories.index', ['categories' => $builder->getAll()]);
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
    public function store(Request $request)
    {
        $categories = $request->only(['title', 'description']);

        Category::create($categories);

        return redirect()->route('admin.categories.index')->with('success', 'Category has been create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $category = $category->fill($request->only(['title', 'description']));
        $category->save();
        return redirect()->route('admin.categories.index')->with('success', 'News has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        DB::table('categories')->delete($category->id);

        return redirect(route('admin.categories.index'));
    }
}
