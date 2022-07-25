<?php

namespace App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PengajuanSuratKeteranganAktif\Pesan\StoreRequest;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use Illuminate\Http\Request;

class PengajuanMasukController extends Controller
{
    public function index()
    {
        $data['list_pengajuanmasuk'] = PengajuanSuratKeteranganAktif::all();
        return view('master-data.pengajuansuratketeranganaktif.pengajuanmasuk.admin.index', $data);
    }

    public function show(PengajuanSuratKeteranganAktif $pengajuanmasuk)
    {
        $data['pengajuansuratketeranganaktif'] = $pengajuanmasuk;

        return view('master-data.pengajuansuratketeranganaktif.pengajuanmasuk.admin.show', $data);
    }

    public function destroy(PengajuanSuratKeteranganAktif $pengajuansuratketeranganaktif)
    {
        $pengajuansuratketeranganaktif->handleDelete();
        $pengajuansuratketeranganaktif->delete();

        return redirect('pengajuansuratketeranganaktif/admin/pengajuanmasuk')->with('success', 'Data berhasil dihapus');
    }

    public function tolak(PengajuanSuratKeteranganAktif $pesan)
    {
        $data['pengajuansuratketeranganaktif'] = $pesan;
        return view('master-data.pengajuansuratketeranganaktif.pengajuanmasuk.admin.tolak', $data);
    }

    public function pesan(PengajuanSuratKeteranganAktif $pesan, StoreRequest $request)
    {
        $pesan->pesan_admin = request('pesan_admin');
        $pesan->status = 3;
        $pesan->save();

        return redirect('pengajuansuratketeranganaktif/admin/pengajuanmasuk')->with('success', 'Pengajuan berhasil ditolak');
    }

    public function setuju(pengajuansuratketeranganaktif $setuju)
    {
        $setuju->status = 2;
        $setuju->save();

        return redirect('pengajuansuratketeranganaktif/admin/pengajuanmasuk')->with('success', 'Pengajuan berhasil disetujui');
    }
}
