<?php

namespace App\Models\Admin\PengajuanSuratKeteranganAktif;

use App\Models\Model;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PengajuanSuratKeteranganAktif extends Model
{
    protected $table = 'superadmin__mahasiswa__pengajuansuratketeranganaktif';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function getTanggalPengajuanStringAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }

    function handleUploadSuratKeteranganAktif()
    {
        $this->handleDelete();
        if(request()->hasFile('surat_keteranganaktif')){
            $surat_keteranganaktif = request()->file('surat_keteranganaktif');
            $destination = "surat/keterangan_aktif";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$surat_keteranganaktif->extension();
            $url = $surat_keteranganaktif->storeAs($destination, $filename);
            $this->surat_keteranganaktif = "app/".$url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $surat_keteranganaktif = $this->surat_keteranganaktif;
        if($surat_keteranganaktif){
            $path = public_path($surat_keteranganaktif);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
