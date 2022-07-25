<?php

namespace App\Models\Admin\Pkkmb;

use App\Models\Model;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use App\Models\Admin\Pkkmb\Pertemuan;
use Illuminate\Support\Str;

class Absen extends Model
{
    protected $table = 'superadmin__mahasiswa__pkkmb__absen';

    public function pertemuan()
    {
        return $this->belongsTo(Pertemuan::class, 'id_pertemuan');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    function getTanggalKegiatanStringAttribute()
    {
        $tanggal = $this->tanggal_kegiatan;
        return strftime("%d %B %Y", strtotime($this->tanggal_kegiatan));
    }

    function handleUploadFotoBukti()
    {
        $this->handleDelete();
        if(request()->hasFile('foto_bukti')){
            $foto_bukti = request()->file('foto_bukti');
            $destination = "images/pkkmb/absen_pkkmb";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto_bukti->extension();
            $url = $foto_bukti->storeAs($destination, $filename);
            $this->foto_bukti = "app/".$url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto_bukti = $this->foto_bukti;
        if($foto_bukti){
            $path = public_path($foto_bukti);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
