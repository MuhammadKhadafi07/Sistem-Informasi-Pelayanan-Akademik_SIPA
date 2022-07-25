<?php

namespace App\Http\Controllers\Koor\Perpustakaan;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class RiwayatPengumpulanBerkasController extends Controller
{
    public function index()
    {
        $data['list_riwayatpengumpulanberkas'] = PengajuanPengambilanIjazah::all();
        return view('koor.perpustakaan.riwayatpengumpulanberkas.index', $data);
    }

    public function show(PengajuanPengambilanIjazah  $riwayatpengumpulanberka)
    {
        $data['pengumpulanberkas'] = $riwayatpengumpulanberka;
        return view('koor.perpustakaan.riwayatpengumpulanberkas.show', $data);
    }

    public function cancel($id)
    {
        $riwayatpengumpulanberka = PengajuanPengambilanIjazah::find($id);
        $riwayatpengumpulanberka->status_perpustakaan = 1;
        $riwayatpengumpulanberka->save();
        
        return redirect('koor/perpustakaan/riwayatpengumpulanberkas')->with('warning', 'Berhasil dicancel');
    }
}
