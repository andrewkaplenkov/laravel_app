<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index()
    {
        $data = DB::table('feedback')->get();

        return view('admin.feedback.index', ['feedback' => $data]);
    }

    public function destroy(int $feedback)
    {
        DB::table('feedback')->delete($feedback);

        return redirect(route('admin.feedback.index'));
    }
}
