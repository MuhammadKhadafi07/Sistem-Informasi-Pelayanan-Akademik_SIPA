<?php

namespace App\Models\Superadmin\MasterData;

use App\Models\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Login extends Model
{
    protected $table = 'superadmin__imagelogin';

    function handleUploadFoto()
    {
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/imagelogin";
            $filename = $foto->getClientOriginalName();
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

    public function getTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
