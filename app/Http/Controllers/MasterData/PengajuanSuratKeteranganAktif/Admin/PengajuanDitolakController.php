<?php

namespace App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use Illuminate\Http\Request;

class PengajuanDitolakController extends Controller
{
    public function index()
    {
        $data['list_pengajuanditolak'] = PengajuanSuratKeteranganAktif::all();
        return view('master-data.pengajuansuratketeranganaktif.pengajuanditolak.admin.index', $data);
    }

    public function show(PengajuanSuratKeteranganAktif $pengajuanditolak)
    {
        $data['pengajuansuratketeranganaktif'] = $pengajuanditolak;
        return view('master-data.pengajuansuratketeranganaktif.pengajuanditolak.admin.show', $data);
    }

    public function diproses($id)
    {
        $pengajuanditolak = PengajuanSuratKeteranganAktif::find($id);
        $pengajuanditolak->status = 1;
        $pengajuanditolak->pesan_admin = null;
        $pengajuanditolak->save();

        return redirect('pengajuansuratketeranganaktif/admin/pengajuanditolak')->with('warning', 'Berhasil dibatalkan');
    }

    // Revisi 30 Des 2022
    public function destroy(PengajuanSuratKeteranganAktif $pengajuanditolak)
    {
        $pengajuanditolak->delete();

        return redirect('pengajuansuratketeranganaktif/admin/pengajuanditolak')->with('danger', 'Berhasil dihapus');
    }
}
