<?php

namespace App\Http\Controllers\Mahasiswa\Pkkmb;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pkkmb\Absen;
use Illuminate\Http\Request;

class PertemuanController extends Controller
{
    public function index()
    {
        $data['list_absen'] = Absen::all();
        return view('mahasiswa.pkkmb.absen.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.pkkmb.absen.create');
    }

    public function store()
    {
        $absen = new Absen();
        $absen->nama_kelompok = request('nama_kelompok');
        $absen->materi_kegiatan = request('materi_kegiatan');
        $absen->tanggal_kegiatan = request('tanggal_kegiatan');
        $absen->total_anggota = request('total_anggota');
        $absen->jumlah_anggota_hadir = request('jumlah_anggota_hadir');
        $absen->jumlah_anggota_tidak_hadir = request('jumlah_anggota_tidak_hadir');
        $absen->anggota_hadir = request('anggota_hadir');
        $absen->anggota_tidak_hadir = request('anggota_tidak_hadir');
        $absen->program_studi = request('program_studi');

        $absen->handleUploadFotoBukti();

        return redirect('mahasiswa/absen')->with('success', 'Data berhasil tersimpan');
    }

    public function show(Absen $absen)
    {
        $data['absen'] = $absen;
        
        return view('mahasiswa.pkkmb.absen.show', $data);
    }
}
