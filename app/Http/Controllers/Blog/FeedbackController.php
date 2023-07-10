<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        $data = $request->validated();

        DB::table('feedback')->insert([
            'name' => $data['name'],
            'message' => $data['message'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect(route('feedback.create'));
    }
}
