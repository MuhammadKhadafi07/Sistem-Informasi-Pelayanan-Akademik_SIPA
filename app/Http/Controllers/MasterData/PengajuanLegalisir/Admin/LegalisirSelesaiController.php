<?php

namespace App\Http\Controllers\MasterData\PengajuanLegalisir\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use Illuminate\Http\Request;

class LegalisirSelesaiController extends Controller
{
    public function index()
    {
        $data['list_legalisirselesai'] = PengajuanLegalisir::all();
        return view('master-data.pengajuanlegalisir.legalisirselesai.admin.index', $data);
    } 

    public function show(PengajuanLegalisir $legalisirselesai)
    {
        $data['pengajuanlegalisir'] = $legalisirselesai;
        return view('master-data.pengajuanlegalisir.legalisirselesai.admin.show', $data);
    }

    public function proses($id)
    {
        $legalisirselesai = PengajuanLegalisir::find($id);
        $legalisirselesai->status = 1;
        $legalisirselesai->tanggal_diambil = null;
        $legalisirselesai->save();

        return redirect('pengajuanlegalisir/admin/legalisirselesai')->with('warning', 'Berhasil dibatalkan');
    }

    public function clear(PengajuanLegalisir $clear)
    {
        $clear->status = 3;
        $clear->save();

        return redirect('pengajuanlegalisir/admin/legalisirselesai')->with('success', 'Pengajuan selesai');
    }
}
