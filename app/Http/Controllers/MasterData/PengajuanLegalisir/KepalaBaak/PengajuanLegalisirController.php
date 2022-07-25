<?php

namespace App\Http\Controllers\MasterData\PengajuanLegalisir\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use Illuminate\Http\Request;

class PengajuanLegalisirController extends Controller
{
    public function index()
    {
        $data['list_pengajuanlegalisir'] = PengajuanLegalisir::all();
        return view('master-data.pengajuanlegalisir.pengajuanmasuk.kepalabaak.index', $data);
    }

    public function show(PengajuanLegalisir $pengajuanlegalisir)
    {
        $data['pengajuanlegalisir'] = $pengajuanlegalisir;
        return view('master-data.pengajuanlegalisir.pengajuanmasuk.kepalabaak.show', $data);
    }
}
