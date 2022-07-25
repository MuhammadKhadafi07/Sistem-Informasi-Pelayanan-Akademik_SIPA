<?php

namespace App\Models\Admin\PengajuanLegalisir;

use App\Models\Model;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Support\Carbon;

class PengajuanLegalisir extends Model
{
    protected $table = 'superadmin__mahasiswa__pengajuanlegalisir';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function getTanggalPengajuanStringAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }

    public function getTanggalDiambilStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_diambil'])->translatedFormat('l, d F Y');
    }
}
