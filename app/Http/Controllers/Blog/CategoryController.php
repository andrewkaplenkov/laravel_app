<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Queries\CategoryQueryBuilder;
use Illuminate\Http\Request;

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
        return view('blog.categories.index', [
            'categories' => $this->categoryQueryBuilder->all()
        ]);
    }
}
