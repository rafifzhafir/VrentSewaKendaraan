<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    public function pesanan_detail()
    {
        return $this->hasMany('App\Models\pesananDetail', 'kendaraan_id', 'id');
    }
}
