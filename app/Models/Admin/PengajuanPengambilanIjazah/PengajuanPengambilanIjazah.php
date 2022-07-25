<?php

namespace App\Models\Admin\PengajuanPengambilanIjazah;

use App\Models\Admin\Alumni\Alumni;
use App\Models\Model2;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Support\Carbon;

class PengajuanPengambilanIjazah extends Model2
{
    protected $table = 'superadmin__mahasiswa__pengajuanpengambilanijazah';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id');
    }

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'id');
    }

    public function getTanggalPengajuanStringAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
