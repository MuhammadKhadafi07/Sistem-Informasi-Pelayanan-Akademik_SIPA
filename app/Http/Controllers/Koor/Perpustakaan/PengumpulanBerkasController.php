<?php

namespace App\Http\Controllers\Koor\Perpustakaan;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class PengumpulanBerkasController extends Controller
{
    public function index()
    {
        $data['list_pengumpulanberkas'] = PengajuanPengambilanIjazah::all();
        return view('koor.perpustakaan.pengumpulanberkas.index', $data);
    }

    public function show(PengajuanPengambilanIjazah $pengumpulanberka)
    {
        $data['pengumpulanberkas'] = $pengumpulanberka;
        return view('koor.perpustakaan.pengumpulanberkas.show', $data);
    }
    
    public function konfirmasi($id)
    {
        $pengumpulanberka = PengajuanPengambilanIjazah::find($id);
        $pengumpulanberka->status_perpustakaan = 2;
        $pengumpulanberka->save();
        
        return redirect('koor/perpustakaan/pengumpulanberkas')->with('success', 'Berhasil dikonfirmasi');
    }
}
