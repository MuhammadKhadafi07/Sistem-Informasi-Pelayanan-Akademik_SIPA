<?php

namespace App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use Illuminate\Http\Request;

class PengajuanDisetujuiController extends Controller
{
    public function index()
    {
        $data['list_pengajuandisetujui'] = PengajuanSuratKeteranganAktif::all();
        return view('master-data.pengajuansuratketeranganaktif.pengajuandisetujui.kepalabaak.index', $data);
    }

    public function show(PengajuanSuratKeteranganAktif $pengajuandisetujui)
    {
        $data['pengajuansuratketeranganaktif'] = $pengajuandisetujui;
        return view('master-data.pengajuansuratketeranganaktif.pengajuandisetujui.kepalabaak.show', $data);
    }
}
