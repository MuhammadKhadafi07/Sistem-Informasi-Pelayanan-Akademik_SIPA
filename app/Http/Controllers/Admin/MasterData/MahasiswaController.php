<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\Superadmin\Pengguna\StoreRequest;
use App\Http\Requests\Superadmin\Pengguna\UpdateRequest;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.master-data.mahasiswa.index', $data);
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('admin.master-data.mahasiswa.show', $data);
    }

    public function create()
    {
        return view('admin.master-data.mahasiswa.create');
    }

    public function store(StoreRequest $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->program_studi = request('program_studi');
        $mahasiswa->agama = request('agama');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->no_telepon = request('no_telepon');
        $mahasiswa->angkatan = request('angkatan');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->is_alumni = request('is_alumni');
        $mahasiswa->password = request('password');
        $mahasiswa->save();

        $mahasiswa->handleUploadFoto();

        return redirect('admin/master-data/mahasiswa')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;

        return view('admin.master-data.mahasiswa.edit', $data);
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->program_studi = request('program_studi');
        $mahasiswa->agama = request('agama');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->no_telepon = request('no_telepon');
        $mahasiswa->angkatan = request('angkatan');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->is_alumni = request('is_alumni');
        if(request('password')) $mahasiswa->password = request('password');
        $mahasiswa->save();

        if(request('foto')) $mahasiswa->handleUploadFoto();

        return redirect('admin/master-data/mahasiswa')->with('success', 'Data berhasil diedit');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->handleDelete();
        $mahasiswa->delete();
        return redirect('admin/master-data/mahasiswa')->with('danger', 'Data berhasil dihapus');
    }
}
