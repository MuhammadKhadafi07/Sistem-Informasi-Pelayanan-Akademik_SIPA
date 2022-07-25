<?php

namespace App\Http\Controllers\MasterData\PengajuanLegalisir\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use Illuminate\Http\Request;

class RiwayatPengajuanController extends Controller
{
    public function index()
    {
        $data['list_riwayatpengajuan'] = PengajuanLegalisir::all();
        return view('master-data.pengajuanlegalisir.riwayatpengajuan.admin.index', $data);
    }

    public function show(PengajuanLegalisir $riwayatpengajuan)
    {
        $data['pengajuanlegalisir'] = $riwayatpengajuan;
        return view('master-data.pengajuanlegalisir.riwayatpengajuan.admin.show', $data);
    }
    
    public function proses($id)
    {
        $riwayatpengajuan = PengajuanLegalisir::find($id);
        $riwayatpengajuan->status = 2;
        $riwayatpengajuan->save();

        return redirect('pengajuanlegalisir/admin/riwayatpengajuan')->with('warning', 'Berhasil dibatalkan');
    }
}
