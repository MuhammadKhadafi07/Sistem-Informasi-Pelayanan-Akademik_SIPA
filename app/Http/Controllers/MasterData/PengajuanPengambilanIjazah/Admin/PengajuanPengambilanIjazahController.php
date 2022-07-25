<?php

namespace App\Http\Controllers\MasterData\PengajuanPengambilanIjazah\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class PengajuanPengambilanIjazahController extends Controller
{
    public function index(Alumni $alumni)
    {
        $data['alumni'] = $alumni;
        $data['list_pengajuanpengambilanijazah'] = PengajuanPengambilanIjazah::all();
        return view('master-data.pengajuanpengambilanijazah.admin.datapengajuan.index', $data);
    }

    public function show(PengajuanPengambilanIjazah $datapengajuan, Alumni $alumni)
    {
        $data['pengajuanpengambilanijazah'] = $datapengajuan;
        $data['alumni'] = $alumni;
        return view('master-data.pengajuanpengambilanijazah.admin.datapengajuan.show', $data);
    }

    public function clear($id)
    {
        $datapengajuan = PengajuanPengambilanIjazah::find($id);
        $datapengajuan->status_pengajuan = 2;
        $datapengajuan->save();

        return redirect('pengajuanpengambilanijazah/admin/datapengajuan')->with('success', 'Pengajuan clear');
    }
}
