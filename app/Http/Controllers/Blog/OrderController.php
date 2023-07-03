<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('blog.order.index');
    }

    public function store(Request $request)
    {

        // dd($request->input());

        DB::table('orders')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ]);

        return redirect(route('order.index'));
    }
}
