<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use App\Models\pesanan;
use App\Models\pesananDetail;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index($id)
    {
        $kendaraan = kendaraan::where('id', $id)->first();
        return view ('dashboard.catalog.pesan', compact('kendaraan'));
    }

    public function pesan(Request $request, $id)
    {
        $kendaraan = kendaraan::where('id', $id)->first();
        $tanggal = Carbon::now();

        //validasi avaibale
        if($request->jumlah_kendaraan > $kendaraan->stok)
        {
            return redirect('/dashboard/catalog/pesan/' .$id);
        }
        
        $validate_pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        //simpan ke db pesanan
        if(empty($validate_pesanan))
        {
            $pesanan = new pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->alamat = $request->alamat;
            $pesanan->jumlah_harga = 0;
            $pesanan->save();
        }

        $pesanan_baru = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        //cek pesanan detail
        $validate_pesanan_deatil = pesananDetail::where('kendaraan_id', $kendaraan->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($validate_pesanan_deatil))
        {
            $pesanan_detail = new pesananDetail;
            $pesanan_detail->kendaraan_id = $kendaraan->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_kendaraan;
            $pesanan_detail->jumlah_hari = $request->jumlah_hari;
            $pesanan_detail->alamat = $request->alamat;
            $pesanan_detail->jumlah_harga = $kendaraan->harga * $request->jumlah_kendaraan * $request->jumlah_hari;
            $pesanan_detail->save();
        }else
        {
            $pesanan_detail = pesananDetail::where('kendaraan_id', $kendaraan->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_kendaraan;
            
            //harga terbaru
            $harga_pesanan_detail_baru = $kendaraan->harga * $request->jumlah_kendaraan * $request->jumlah_hari;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga + $harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga + $kendaraan->harga * $request->jumlah_kendaraan * $request->jumlah_hari;
        $pesanan->update();

        alert()->success('Success Booking','Success');

        return redirect('/dashboard/catalog');
    }
}
