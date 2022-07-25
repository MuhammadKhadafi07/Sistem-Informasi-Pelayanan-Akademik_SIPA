<?php

namespace App\Http\Controllers\Koor\Jurusan;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class PengumpulanBerkasController extends Controller
{
    public function index()
    {
        $data['list_pengumpulanberkas'] = PengajuanPengambilanIjazah::all();
        return view('koor.jurusan.pengumpulanberkas.index', $data);
    }

    public function show(PengajuanPengambilanIjazah $pengumpulanberka)
    {
        $data['pengumpulanberkas'] = $pengumpulanberka;
        return view('koor.jurusan.pengumpulanberkas.show', $data);
    }
    
    public function konfirmasi($id)
    {
        $pengumpulanberka = PengajuanPengambilanIjazah::find($id);
        $pengumpulanberka->status_jurusan = 2;
        $pengumpulanberka->save();
        
        return redirect('koor/jurusan/pengumpulanberkas')->with('success', 'Berhasil dikonfirmasi');
    }
}
