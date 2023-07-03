<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{

    public function index()
    {
        return view('blog.feedback.index');
    }

    public function store(Request $request)
    {
        // dd($request->input());
        DB::table('feedback')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => $request->input('name'),
            'message' => $request->input('message')
        ]);

        return redirect(route('feedback.index'));
    }
}
