<?php

namespace App\Http\Controllers\MasterData\PengajuanPengambilanIjazah\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class PengajuanPengambilanIjazahController extends Controller
{
    public function index()
    {
        $data['list_pengajuanpengambilanijazah'] = PengajuanPengambilanIjazah::all();
        return view('master-data.pengajuanpengambilanijazah.kepalabaak.datapengajuan.index', $data);
    }

    public function show(PengajuanPengambilanIjazah $datapengajuan)
    {
        $data['pengajuanpengambilanijazah'] = $datapengajuan;
        return view('master-data.pengajuanpengambilanijazah.kepalabaak.datapengajuan.show', $data);
    }
}
