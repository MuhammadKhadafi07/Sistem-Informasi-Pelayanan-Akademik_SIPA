<?php

namespace App\Models\Admin\Etiket;

use App\Models\Model;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use App\Models\Admin\Etiket\Masalah;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Etiket extends Model
{
    protected $table = 'superadmin__mahasiswa__etiket';

    function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function masalah()
    {
        return $this->hasMany(Masalah::class);
    }

    function handleUploadFotoBukti()
    {
        $this->handleDelete();
        if(request()->hasFile('foto_bukti')){
            $foto_bukti = request()->file('foto_bukti');
            $destination = "images/etiket";
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

    public function getTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
