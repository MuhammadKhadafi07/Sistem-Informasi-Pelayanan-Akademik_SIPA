<?php

namespace App\Http\Controllers\MasterData\Pkkmb\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pkkmb\Kelompok;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function index()
    {
        $data['list_kelompok'] = Kelompok::all();
        return view('master-data.pkkmb.kelompok.admin.index', $data);
    }

    public function create()
    {
        return view('master-data.pkkmb.kelompok.admin.create');
    }

    public function store()
    {
        $kelompok = new Kelompok;
        $kelompok->angkatan = request('angkatan');
        $kelompok->program_studi = request('program_studi');
        $kelompok->kelompok = request('kelompok');
        $kelompok->save();

        return redirect('pkkmb/admin/kelompok')->with('success', 'Data berhasil disimpan');
    }

    public function show(Kelompok $kelompok)
    {
        $data['kelompok'] = $kelompok;
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('master-data.pkkmb.kelompok.admin.show', $data);
    }

    public function edit(Kelompok $kelompok)
    {
        $data['kelompok'] = $kelompok;
        return view('master-data.pkkmb.kelompok.admin.edit', $data);
    }

    public function update(Kelompok $kelompok)
    {
        $kelompok->angkatan = request('angkatan');
        $kelompok->program_studi = request('program_studi');
        $kelompok->kelompok = request('kelompok');
        $kelompok->save();

        return redirect('pkkmb/admin/kelompok')->with('success', 'Data berhasil diedit');
    }
}

