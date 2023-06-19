<?php

namespace App\Http\Controllers\Mahasiswa\PengajuanSuratKeteranganAktif;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mahasiswa\PengajuanSuratKeteranganAktif\StoreRequest;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use Illuminate\Http\Request;

class PengajuanSuratKeteranganAktifController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $data['list_pengajuansuratketeranganaktif'] = $user->pengajuansuratketeranganaktif;
        return view('mahasiswa.pengajuansuratketeranganaktif.index', $data);
    }

    public function show(PengajuanSuratKeteranganAktif $pengajuansuratketeranganaktif)
    {
        $data['pengajuansuratketeranganaktif'] = $pengajuansuratketeranganaktif;

        return view('mahasiswa.pengajuansuratketeranganaktif.show', $data);
    }

    public function create()
    {
        return view('mahasiswa.pengajuansuratketeranganaktif.create');
    }

    public function store(StoreRequest $request)
    {
        $pengajuansuratketeranganaktif = new PengajuanSuratKeteranganAktif();
        $pengajuansuratketeranganaktif->id_mahasiswa = request()->user()->id;
        $pengajuansuratketeranganaktif->semester = request('semester');
        $pengajuansuratketeranganaktif->alamat_rumahsekarang = request('alamat_rumahsekarang');
        $pengajuansuratketeranganaktif->nama_orangtua = request('nama_orangtua');
        $pengajuansuratketeranganaktif->tempat_kerja_orangtua = request('tempat_kerja_orangtua');
        $pengajuansuratketeranganaktif->alamat_tinggal_orangtua = request('alamat_tinggal_orangtua');
        $pengajuansuratketeranganaktif->keperluan = request('keperluan');
        $pengajuansuratketeranganaktif->status = 1;
        $pengajuansuratketeranganaktif->no_telepon = request('no_telepon');
        $pengajuansuratketeranganaktif->save();

        return redirect('mahasiswa/pengajuansuratketeranganaktif')->with('success', 'Pengajuan baru berhasil, silahkan konfirmasi ke kontak berikut: Bu Irul +62 878-2765-0024');
    }

    public function destroy(PengajuanSuratKeteranganAktif $pengajuansuratketeranganaktif)
    {
        $pengajuansuratketeranganaktif->delete();

        return redirect('mahasiswa/pengajuansuratketeranganaktif')->with('danger', 'Pengajuan berhasil dihapus');
    }

    public function edit(PengajuanSuratKeteranganAktif $pengajuansuratketeranganaktif)
    {
        $data['pengajuansuratketeranganaktif'] = $pengajuansuratketeranganaktif;

        return view('mahasiswa.pengajuansuratketeranganaktif.edit', $data);
    }

    public function update(PengajuanSuratKeteranganAktif $pengajuansuratketeranganaktif)
    {
        $pengajuansuratketeranganaktif->id_mahasiswa = request()->user()->id;
        $pengajuansuratketeranganaktif->semester = request('semester');
        $pengajuansuratketeranganaktif->alamat_rumahsekarang = request('alamat_rumahsekarang');
        $pengajuansuratketeranganaktif->nama_orangtua = request('nama_orangtua');
        $pengajuansuratketeranganaktif->tempat_kerja_orangtua = request('tempat_kerja_orangtua');
        $pengajuansuratketeranganaktif->alamat_tinggal_orangtua = request('alamat_tinggal_orangtua');
        $pengajuansuratketeranganaktif->keperluan = request('keperluan');
        $pengajuansuratketeranganaktif->status = 1;
        $pengajuansuratketeranganaktif->no_telepon = request('no_telepon');
        $pengajuansuratketeranganaktif->save();

        return redirect('mahasiswa/pengajuansuratketeranganaktif')->with('warning', 'Pengajuan berhasil diedit');
    }
}
