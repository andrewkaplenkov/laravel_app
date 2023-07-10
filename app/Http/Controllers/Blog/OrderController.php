<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        $data = $request->validated();

        DB::table('orders')->insert([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'message' => $data['message'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect(route('order.create'));
    }
}
