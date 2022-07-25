<?php

namespace App\Models\Admin\Pkkmb;

use App\Models\Model;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use App\Models\Admin\Pkkmb\Pertemuan;

class Kelompok extends Model
{
    protected $table = 'superadmin__mahasiswa__pkkmb__kelompok';

    // public function mahasiswa()
    // {
    //     return $this->hasMany(Mahasiswa::class, 'id_kelompok');
    // }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
    
    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class, 'id_kelompok');
    }
}
