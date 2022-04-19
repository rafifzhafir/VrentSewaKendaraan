<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesananDetail extends Model
{
    use HasFactory;
    public function kendaraan()
    {
        return $this->belongsTo('App\Models\kendaraan', 'kendaraan_id', 'id');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Models\pesanan', 'pesanan_id', 'id');
    }
}
