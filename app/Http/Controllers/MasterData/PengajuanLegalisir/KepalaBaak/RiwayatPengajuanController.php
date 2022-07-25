<?php

namespace App\Http\Controllers\MasterData\PengajuanLegalisir\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use Illuminate\Http\Request;

class RiwayatPengajuanController extends Controller
{
    public function index()
    {
        $data['list_riwayatpengajuan'] = PengajuanLegalisir::all();
        return view('master-data.pengajuanlegalisir.riwayatpengajuan.kepalabaak.index', $data);
    }

    public function show(PengajuanLegalisir $riwayatpengajuan)
    {
        $data['pengajuanlegalisir'] = $riwayatpengajuan;
        return view('master-data.pengajuanlegalisir.riwayatpengajuan.kepalabaak.show', $data);
    }
}
