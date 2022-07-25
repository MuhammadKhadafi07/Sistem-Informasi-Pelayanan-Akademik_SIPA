<?php

namespace App\Http\Controllers\MasterData\PengajuanLegalisir\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PengajuanLegalisir\TanggalRequest;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use Illuminate\Http\Request;

class PengajuanLegalisirController extends Controller
{
    public function index()
    {
        $data['list_pengajuanlegalisir'] = PengajuanLegalisir::all();
        return view('master-data.pengajuanlegalisir.pengajuanmasuk.admin.index', $data);
    }

    public function show(PengajuanLegalisir $pengajuanlegalisir)
    {
        $data['pengajuanlegalisir'] = $pengajuanlegalisir;
        return view('master-data.pengajuanlegalisir.pengajuanmasuk.admin.show', $data);
    }

    public function selesai(PengajuanLegalisir $selesai)
    {
        $data['pengajuanlegalisir'] = $selesai;
        return view('master-data.pengajuanlegalisir.pengajuanmasuk.admin.selesai', $data);
    }
    
    public function ket_pengambilan(PengajuanLegalisir $selesai, TanggalRequest $request)
    {
        $selesai->tanggal_diambil = request('tanggal_diambil');
        $selesai->status = 2;
        $selesai->save();

        return redirect('pengajuanlegalisir/admin/pengajuanlegalisir')->with('success', 'Data berhasil terkirim');
    }
}
