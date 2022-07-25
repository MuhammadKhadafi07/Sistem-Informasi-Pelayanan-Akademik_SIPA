<?php

namespace App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use Illuminate\Http\Request;

class PengajuanDitolakController extends Controller
{
    public function index()
    {
        $data['list_pengajuanditolak'] = PengajuanSuratKeteranganAktif::all();
        return view('master-data.pengajuansuratketeranganaktif.pengajuanditolak.kepalabaak.index', $data);
    }

    public function show(PengajuanSuratKeteranganAktif $pengajuanditolak)
    {
        $data['pengajuansuratketeranganaktif'] = $pengajuanditolak;
        return view('master-data.pengajuansuratketeranganaktif.pengajuanditolak.kepalabaak.show', $data);
    }
}
