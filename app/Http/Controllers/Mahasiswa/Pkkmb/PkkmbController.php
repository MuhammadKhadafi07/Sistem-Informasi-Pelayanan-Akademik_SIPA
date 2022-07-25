<?php

namespace App\Http\Controllers\Mahasiswa\Pkkmb;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pkkmb\Pkkmb;
use Illuminate\Http\Request;

class PkkmbController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $data['list_pkkmb'] = $user->pkkmb;
        return view('mahasiswa.pkkmb.data.index', $data);
    }

    public function show(Pkkmb $pkkmb)
    {
        $data['pkkmb'] = $pkkmb;
        return view('mahasiswa.pkkmb.data.show', $data);
    }

    public function create()
    {
        return view('mahasiswa.pkkmb.data.create');
    }

    public function store()
    {
        $pkkmb = new Pkkmb();
        $pkkmb->id_mahasiswa = request()->user()->id;
        $pkkmb->nim = request('nim');
        $pkkmb->nama = request('nama');
        $pkkmb->program_studi = request('program_studi');
        $pkkmb->angkatan = request('angkatan');
        $pkkmb->agama = request('agama');
        $pkkmb->no_telepon = request('no_telepon');
        $pkkmb->jenis_kelamin = request('jenis_kelamin');
        $pkkmb->save();

        $pkkmb->handleUploadFoto();

        return redirect('mahasiswa/pkkmb')->with('success', 'Anda berhasil daftar');
    }

    public function edit(Pkkmb $pkkmb)
    {
        $data['pkkmb'] = $pkkmb;
        return view('mahasiswa.pkkmb.data.edit', $data);
    }

    public function update(Pkkmb $pkkmb)
    {
        $pkkmb->nim = request('nim');
        $pkkmb->nama = request('nama');
        $pkkmb->program_studi = request('program_studi');
        $pkkmb->angkatan = request('angkatan');
        $pkkmb->agama = request('agama');
        $pkkmb->no_telepon = request('no_telepon');
        $pkkmb->jenis_kelamin = request('jenis_kelamin');
        $pkkmb->save();

        if(request('foto')) $pkkmb->handleUploadFoto();

        return redirect('mahasiswa/pkkmb')->with('success', 'Data berhasil diedit');
    }
}
