<?php

namespace App\Models\Admin\Alumni;

use App\Models\Model2;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Support\Str;

class Alumni extends Model2
{
    protected $table = 'superadmin__mahasiswa__alumni';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id');
    }
    
    public function bukualumni()
    {
        return $this->belongsTo(BukuAlumni::class, 'id');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/alumni";
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
}
