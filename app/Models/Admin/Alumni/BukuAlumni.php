<?php

namespace App\Models\Admin\Alumni;

use App\Models\Model;

class BukuAlumni extends Model
{
    protected $table = 'superadmin__mahasiswa__bukualumni';

    public function alumni()
    {
        return $this->hasMany(Alumni::class, 'id_bukualumni');
    }
}
