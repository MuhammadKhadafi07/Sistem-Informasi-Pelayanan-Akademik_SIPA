<?php

namespace App\Http\Controllers\MasterData\Alumni\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\Alumni\BukuAlumni;
use Illuminate\Http\Request;

class BukuAlumniController extends Controller
{
    public function index()
    {
        $data['list_bukualumni'] = BukuAlumni::withCount('alumni')->get();
        return view('master-data.alumni.kepalabaak.bukualumni.index', $data);
    }

    public function show(BukuAlumni $bukualumnus)
    {
        $data['bukualumnus'] = $bukualumnus;
        $data['list_bukualumni'] = Alumni::all();
        return view('master-data.alumni.kepalabaak.bukualumni.show', $data);
    }
}
