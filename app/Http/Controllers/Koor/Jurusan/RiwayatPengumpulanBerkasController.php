<?php

namespace App\Http\Controllers\Koor\Jurusan;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class RiwayatPengumpulanBerkasController extends Controller
{
    public function index()
    {
        $data['list_riwayatpengumpulanberkas'] = PengajuanPengambilanIjazah::all();
        return view('koor.jurusan.riwayatpengumpulanberkas.index', $data);
    }

    public function show(PengajuanPengambilanIjazah $riwayatpengumpulanberka)
    {
        $data['pengumpulanberkas'] = $riwayatpengumpulanberka;
        return view('koor.jurusan.riwayatpengumpulanberkas.show', $data);
    }

    public function cancel($id)
    {
        $riwayatpengumpulanberka = PengajuanPengambilanIjazah::find($id);
        $riwayatpengumpulanberka->status_jurusan = 1;
        $riwayatpengumpulanberka->save();
        
        return redirect('koor/jurusan/riwayatpengumpulanberkas')->with('warning', 'Berhasil dicancel');
    }
}
