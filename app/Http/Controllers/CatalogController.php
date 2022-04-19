<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $kendaraans = kendaraan::paginate(20);
        return view ('dashboard.catalog.index', compact('kendaraans'));
    }
}
