<?php

namespace App\Http\Controllers\Alumnis;

use App\Http\Controllers\Controller;
use App\Http\Requests\Alumni\Alumni\StoreRequest;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\Alumni\BukuAlumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['list_alumni'] = $user->alumni;
        return view('alumnis.alumni.index', $data);
    }

    public function show(Alumni $alumni)
    {
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['alumni'] = $alumni;
        return view('alumnis.alumni.show', $data);
    }

    public function create()
    {
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        return view('alumnis.alumni.create', $data);
    }

    public function store(StoreRequest $request)
    {
        $alumni = Alumni::find($request->id);
        if($alumni) return redirect('alumni/alumnis')->with('danger', 'Data sudah ada');

        $alumni = new Alumni();
        $alumni->id = request('id');
        $alumni->id_bukualumni = request('id_bukualumni');
        $alumni->email = request('email');
        $alumni->no_hp = request('no_hp');
        $alumni->alamat = request('alamat');
        $alumni->kegiatan_sekarang = request('kegiatan_sekarang');
        $alumni->jenis_pekerjaan = request('jenis_pekerjaan');
        $alumni->jenis_pekerjaan_lainnya = request('jenis_pekerjaan_lainnya');
        $alumni->nama_perusahaan = request('nama_perusahaan');
        $alumni->kategori_perusahaan = request('kategori_perusahaan');
        $alumni->kategori_perusahaan_lainnya = request('kategori_perusahaan_lainnya');
        $alumni->jabatan = request('jabatan');
        $alumni->waktu_tunggu_kerja = request('waktu_tunggu_kerja');
        $alumni->kesesuaian_kompetensi = request('kesesuaian_kompetensi');
        $alumni->gaji_pertama = request('gaji_pertama');
        $alumni->saran_masukan = request('saran_masukan');
        $alumni->kesan = request('kesan');
        $alumni->save();

        $alumni->handleUploadFoto();

        return redirect('alumni/alumnis')->with('success', 'Terimakasih telah mengisi data alumni');
    }

    public function edit(Alumni $alumni)
    {
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['alumni'] = $alumni;
        return view('alumnis.alumni.edit', $data);
    }

    public function update(Alumni $alumni)
    {
        $alumni->id_bukualumni = request('id_bukualumni');
        $alumni->email = request('email');
        $alumni->no_hp = request('no_hp');
        $alumni->alamat = request('alamat');
        $alumni->kegiatan_sekarang = request('kegiatan_sekarang');
        $alumni->jenis_pekerjaan = request('jenis_pekerjaan');
        $alumni->jenis_pekerjaan_lainnya = request('jenis_pekerjaan_lainnya');
        $alumni->nama_perusahaan = request('nama_perusahaan');
        $alumni->kategori_perusahaan = request('kategori_perusahaan');
        $alumni->kategori_perusahaan_lainnya = request('kategori_perusahaan_lainnya');
        $alumni->jabatan = request('jabatan');
        $alumni->waktu_tunggu_kerja = request('waktu_tunggu_kerja');
        $alumni->kesesuaian_kompetensi = request('kesesuaian_kompetensi');
        $alumni->gaji_pertama = request('gaji_pertama');
        $alumni->saran_masukan = request('saran_masukan');
        $alumni->kesan = request('kesan');
        $alumni->save();

        if(request('foto')) $alumni->handleUploadFoto();

        return redirect('alumni/alumnis')->with('success', 'Data berhasil diedit');
    }
}
