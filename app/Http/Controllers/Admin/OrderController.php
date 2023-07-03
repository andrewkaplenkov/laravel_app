<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $data = DB::table('orders')->get();

        return view('admin.orders.index', ['orders' => $data]);
    }

    public function destroy(int $order)
    {
        DB::table('orders')->delete($order);

        return redirect(route('admin.orders.index'));
    }
}
