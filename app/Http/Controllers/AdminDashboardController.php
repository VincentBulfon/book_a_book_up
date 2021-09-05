<?php

namespace App\Http\Controllers;

use App\Models\Order;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('teacher.show-orders');
    }

    public function showArchived()
    {
        return view('teacher.show-archived-orders');
    }
}
