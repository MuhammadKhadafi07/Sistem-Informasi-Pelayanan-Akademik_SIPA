<?php

namespace App\Http\Controllers\MasterData\PengajuanLegalisir\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use Illuminate\Http\Request;

class LegalisirSelesaiController extends Controller
{
    public function index()
    {
        $data['list_legalisirselesai'] = PengajuanLegalisir::all();
        return view('master-data.pengajuanlegalisir.legalisirselesai.kepalabaak.index', $data);
    }

    public function show(PengajuanLegalisir $legalisirselesai)
    {
        $data['pengajuanlegalisir'] = $legalisirselesai;
        return view('master-data.pengajuanlegalisir.legalisirselesai.kepalabaak.show', $data);
    }
}
