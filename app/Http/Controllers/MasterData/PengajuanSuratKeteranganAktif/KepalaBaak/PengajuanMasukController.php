<?php

namespace App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use Illuminate\Http\Request;

class PengajuanMasukController extends Controller
{
    public function index()
    {
        $data['list_pengajuanmasuk'] = PengajuanSuratKeteranganAktif::all();
        return view('master-data.pengajuansuratketeranganaktif.pengajuanmasuk.kepalabaak.index', $data);
    }

    public function show(PengajuanSuratKeteranganAktif $pengajuanmasuk)
    {
        $data['pengajuansuratketeranganaktif'] = $pengajuanmasuk;

        return view('master-data.pengajuansuratketeranganaktif.pengajuanmasuk.kepalabaak.show', $data);
    }
}
