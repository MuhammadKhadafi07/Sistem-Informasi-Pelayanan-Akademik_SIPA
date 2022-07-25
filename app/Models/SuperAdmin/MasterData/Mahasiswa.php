<?php

namespace App\Models\SuperAdmin\MasterData;

use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\Etiket\Etiket;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use App\Models\Admin\Pkkmb\Absen;
use App\Models\Admin\Pkkmb\Kelompok;
use App\Models\Admin\Pkkmb\Pkkmb;
use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Mahasiswa extends ModelAuthenticate
{
    protected $table = 'superadmin__mahasiswa';

    public $fillable = ['nim', 'nama'];

    // MAHASISWA RELASI

    public function etiket()
    {
        return $this->hasMany(Etiket::class, 'id_mahasiswa');
    }

    // Menu ABSEN PKKMB

    public function pkkmb()
    {
        return $this->hasMany(Pkkmb::class, 'id_mahasiswa');
    }

    public function absen()
    {
        return $this->hasMany(Absen::class, 'id_pertemuan');
    }

    // public function kelompok()
    // {
    //     return $this->belongsTo(Kelompok::class, 'id_kelompok');
    // }

    // end menu

    public function pengajuansuratketeranganaktif()
    {
        return $this->hasMany(PengajuanSuratKeteranganAktif::class, 'id_mahasiswa');
    }

    public function pengajuanpengambilanijazah()
    {
        return $this->hasMany(PengajuanPengambilanIjazah::class, 'id');
    }

    // END MAHASISWA RELASI



    // ALUMNI RELASI

    public function alumni()
    {
        return $this->hasMany(Alumni::class, 'id');
    }

    public function pengajuanlegalisir()
    {
        return $this->hasMany(PengajuanLegalisir::class, 'id_mahasiswa');
    }

    // END RELASI

    public function getTanggalLahirStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_lahir'])->translatedFormat('d F Y');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/mahasiswa";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }

    public function getIsAlumniStringAttribute(){
        return ($this->is_alumni == 1) ? "Alumni" : "Mahasiswa";
    }
}
