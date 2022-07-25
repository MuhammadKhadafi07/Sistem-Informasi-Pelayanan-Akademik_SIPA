<?php

namespace App\Http\Controllers\Alumnis;

use App\Http\Controllers\Controller;
use App\Http\Requests\Alumni\PengajuanPengambilanIjazah\StoreRequest;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use Illuminate\Http\Request;

class PengajuanPengambilanIjazahController extends Controller
{
    public function index(Alumni $alumnus)
    {
        $user = request()->user();
        $data['alumni'] = $alumnus;
        $data['list_pengajuanpengambilanijazah'] = $user->pengajuanpengambilanijazah;
        return view('alumnis.pengajuanpengambilanijazah.index', $data);
    }

    public function show(PengajuanPengambilanIjazah $pengajuanpengambilanijazah, Alumni $alumnus)
    {
        $data['alumni'] = $alumnus;
        $data['pengajuanpengambilanijazah'] = $pengajuanpengambilanijazah;
        return view('alumnis.pengajuanpengambilanijazah.show', $data);
    }

    public function create()
    {
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        return view('alumnis.pengajuanpengambilanijazah.create', $data);
    }

    public function store(StoreRequest $request)
    {
        $pengajuanpengambilanijazah = PengajuanPengambilanIjazah::find($request->id);
        if($pengajuanpengambilanijazah) return redirect('alumni/pengajuanpengambilanijazah')->with('danger', 'Pengajuan sudah ada');

        $pengajuanpengambilanijazah = new PengajuanPengambilanIjazah();
        $pengajuanpengambilanijazah->id = request('id');
        $pengajuanpengambilanijazah->nim = request('nim');
        $pengajuanpengambilanijazah->nama = request('nama');
        $pengajuanpengambilanijazah->no_hp = request('no_hp');
        $pengajuanpengambilanijazah->status_perpustakaan = 1;
        $pengajuanpengambilanijazah->status_jurusan = 1;
        $pengajuanpengambilanijazah->status_pengajuan = 1;
        $pengajuanpengambilanijazah->save();

        return redirect('alumni/pengajuanpengambilanijazah')->with('success', 'Pengajuan berhasil');
    }
}
