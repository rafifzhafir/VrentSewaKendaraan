<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kendaraan;
use App\Models\pesanan;
use App\Models\pesananDetail;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
