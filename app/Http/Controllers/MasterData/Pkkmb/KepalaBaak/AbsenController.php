<?php

namespace App\Http\Controllers\MasterData\Pkkmb\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pkkmb\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        // $data['list_absen'] = Absen::withCount('absen')->get();
        $data['list_absen'] = Absen::all();
        return view('master-data.pkkmb.absen.kepalabaak.index', $data);
    }

    public function show(Absen $absen)
    {
        $data['absen'] = $absen;

        return view('master-data.pkkmb.absen.kepalabaak.show', $data);
    }
}
