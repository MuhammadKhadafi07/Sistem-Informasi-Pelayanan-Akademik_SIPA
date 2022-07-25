<?php

namespace App\Models\Admin\Pkkmb;

use App\Models\Model;

class Pertemuan extends Model
{
    protected $table = 'superadmin__mahasiswa__pkkmb__pertemuan';

    public function absen()
    {
        return $this->hasMany(Absen::class, 'id_pertemuan');
    }

    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'id_kelompok');
    }
}
