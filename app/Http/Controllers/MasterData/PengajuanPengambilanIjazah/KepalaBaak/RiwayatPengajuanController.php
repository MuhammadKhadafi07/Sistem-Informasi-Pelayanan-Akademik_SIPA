<?php

namespace App\Http\Controllers\MasterData\PengajuanPengambilanIjazah\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class RiwayatPengajuanController extends Controller
{
    public function index()
    {
        $data['list_pengajuanpengambilanijazah'] = PengajuanPengambilanIjazah::all();
        return view('master-data.pengajuanpengambilanijazah.kepalabaak.riwayatpengajuan.index', $data);
    }

    public function show(PengajuanPengambilanIjazah $riwayatpengajuan)
    {
        $data['pengajuanpengambilanijazah'] = $riwayatpengajuan;
        return view('master-data.pengajuanpengambilanijazah.kepalabaak.riwayatpengajuan.show', $data);
    }
}
