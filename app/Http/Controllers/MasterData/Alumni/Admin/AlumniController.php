<?php

namespace App\Http\Controllers\MasterData\Alumni\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\Alumni\BukuAlumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['list_alumni'] = Alumni::all();
        return view('master-data.alumni.admin.alumni.index', $data);
    }

    public function show(Alumni $alumnus)
    {
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['alumnus'] = $alumnus;
        return view('master-data.alumni.admin.alumni.show', $data);
    }

    public function edit(Alumni $alumnus)
    {
        $data['list_bukualumni'] = BukuAlumni::all();
        $data['alumnus'] = $alumnus;
        return view('master-data.alumni.admin.alumni.edit', $data);
    }

    public function update(Alumni $alumnus)
    {
        $alumnus->id_bukualumni = request('id_bukualumni');
        $alumnus->email = request('email');
        $alumnus->no_hp = request('no_hp');
        $alumnus->alamat = request('alamat');
        $alumnus->kegiatan_sekarang = request('kegiatan_sekarang');
        $alumnus->jenis_pekerjaan = request('jenis_pekerjaan');
        $alumnus->nama_perusahaan = request('nama_perusahaan');
        $alumnus->kategori_perusahaan = request('kategori_perusahaan');
        $alumnus->jabatan = request('jabatan');
        $alumnus->waktu_tunggu_kerja = request('waktu_tunggu_kerja');
        $alumnus->kesesuaian_kompetensi = request('kesesuaian_kompetensi');
        $alumnus->gaji_pertama = request('gaji_pertama');
        $alumnus->saran_masukan = request('saran_masukan');
        $alumnus->kesan = request('kesan');
        $alumnus->save();

        if(request('foto')) $alumnus->handleUploadFoto();

        return redirect('alumni/admin/alumni')->with('success', 'Data berhasil diedit');
    }

        public function destroy(Alumni $alumnus)
        {
            $alumnus->handleDelete();
            $alumnus->delete();
            return redirect('alumni/admin/alumni')->with('danger', 'Data berhasil dihapus');
        }
}
