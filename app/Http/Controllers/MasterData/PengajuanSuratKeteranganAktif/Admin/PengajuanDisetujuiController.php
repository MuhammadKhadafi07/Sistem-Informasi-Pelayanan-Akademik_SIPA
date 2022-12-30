<?php

namespace App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use Illuminate\Http\Request;

class PengajuanDisetujuiController extends Controller
{
    public function index()
    {
        $data['list_pengajuandisetujui'] = PengajuanSuratKeteranganAktif::all();
        return view('master-data.pengajuansuratketeranganaktif.pengajuandisetujui.admin.index', $data);
    }

    public function show(PengajuanSuratKeteranganAktif $pengajuandisetujui)
    {
        $data['pengajuansuratketeranganaktif'] = $pengajuandisetujui;
        return view('master-data.pengajuansuratketeranganaktif.pengajuandisetujui.admin.show', $data);
    }

    public function kirimsurat(PengajuanSuratKeteranganAktif $kirimsurat)
    {
        $kirimsurat->handleUploadSuratKeteranganAktif();

        return redirect('pengajuansuratketeranganaktif/admin/pengajuandisetujui')->with('success', 'Surat berhasil terkirim');
    }

    public function diproses($id)
    {
        $pengajuanditolak = PengajuanSuratKeteranganAktif::find($id);
        $pengajuanditolak->status = 1;
        $pengajuanditolak->save();

        return redirect('pengajuansuratketeranganaktif/admin/pengajuandisetujui')->with('warning', 'Berhasil dibatalkan');
    }

    public function kirimsuratket(PengajuanSuratKeteranganAktif $kirimsurat)
    {
        $data['pengajuansuratketeranganaktif'] = $kirimsurat;
        return view('master-data.pengajuansuratketeranganaktif.pengajuandisetujui.admin.kirimsurat', $data);
    }


    // Update 30 Desember 2022
    public function destroy(PengajuanSuratKeteranganAktif $pengajuandisetujui)
    {
        $pengajuandisetujui->handleDelete();
        $pengajuandisetujui->delete();

        return redirect('pengajuansuratketeranganaktif/admin/pengajuandisetujui')->with('danger', 'Pengajuan berhasil dihapus');
    }
}
