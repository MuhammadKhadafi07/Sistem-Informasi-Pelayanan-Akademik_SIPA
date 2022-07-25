<?php

namespace App\Http\Controllers\MasterData\Alumni\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\Alumni\BukuAlumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['list_alumni'] = Alumni::all();
        return view('master-data.alumni.kepalabaak.alumni.index', $data);
    }

    public function show(Alumni $alumnus)
    {
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['alumnus'] = $alumnus;
        return view('master-data.alumni.kepalabaak.alumni.show', $data);
    }
}
