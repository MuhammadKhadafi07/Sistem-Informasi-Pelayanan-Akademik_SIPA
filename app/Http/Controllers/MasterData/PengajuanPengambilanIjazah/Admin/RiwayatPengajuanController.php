<?php

namespace App\Http\Controllers\MasterData\PengajuanPengambilanIjazah\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class RiwayatPengajuanController extends Controller
{
    public function index(Alumni $alumni)
    {
        $data['alumni'] = $alumni;
        $data['list_pengajuanpengambilanijazah'] = $list_pengajuanpengambilanijazah = PengajuanPengambilanIjazah::orderBy('created_at','desc')->get();
        return view('master-data.pengajuanpengambilanijazah.admin.riwayatpengajuan.index', $data);
    }

    public function show(PengajuanPengambilanIjazah $riwayatpengajuan, Alumni $alumni)
    {
        $data['pengajuanpengambilanijazah'] = $riwayatpengajuan;
        $data['alumni'] = $alumni;
        return view('master-data.pengajuanpengambilanijazah.admin.riwayatpengajuan.show', $data);
    }

    public function cancel($id)
    {
        $riwayatpengajuan = PengajuanPengambilanIjazah::find($id);
        $riwayatpengajuan->status_pengajuan = 1;
        $riwayatpengajuan->save();

        return redirect('pengajuanpengambilanijazah/admin/riwayatpengajuan')->with('warning', 'Pengajuan dibatalkan');
    }
}
