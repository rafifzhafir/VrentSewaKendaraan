<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use App\Models\pesananDetail;
use App\Models\kendaraan;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $pesanan = pesanan::where('user_id', auth()->user()-> id)->where('status', 0)->first();
        $pesanan_details = pesananDetail::where('pesanan_id', $pesanan-> id) ->get();
        
        return view('dashboard.order.index', compact('pesanan', 'pesanan_details'));
    }
}
