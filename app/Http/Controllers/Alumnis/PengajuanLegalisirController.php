<?php

namespace App\Http\Controllers\Alumnis;

use App\Http\Controllers\Controller;
use App\Http\Requests\Alumni\PengajuanLegalisir\StoreRequest;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use Illuminate\Http\Request;

class PengajuanLegalisirController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $data['list_pengajuanlegalisir'] = $user->pengajuanlegalisir;
        return view('alumnis.pengajuanlegalisir.index', $data);
    }

    public function create()
    {
        return view('alumnis.pengajuanlegalisir.create');
    }

    public function store(StoreRequest $request)
    {
        $pengajuanlegalisir = new PengajuanLegalisir();
        $pengajuanlegalisir->id_mahasiswa = request()->user()->id;
        $pengajuanlegalisir->nim = request('nim');
        $pengajuanlegalisir->nama = request('nama');
        $pengajuanlegalisir->no_hp = request('no_hp');
        $pengajuanlegalisir->status = 1;
        $pengajuanlegalisir->save();

        return redirect('alumni/pengajuanlegalisir')->with('success', 'Pengajuan berhasil');
    }

    public function show(PengajuanLegalisir $pengajuanlegalisir)
    {
        $data['pengajuanlegalisir'] = $pengajuanlegalisir;
        return view('alumnis.pengajuanlegalisir.show', $data);
    }
}
