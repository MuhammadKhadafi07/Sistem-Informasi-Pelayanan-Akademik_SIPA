<?php

namespace App\Http\Controllers\MasterData\Alumni\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Alumni\BukuAlumniRequest;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\Alumni\BukuAlumni;

class BukuAlumniController extends Controller
{
    public function index()
    {
        $data['list_bukualumni'] = BukuAlumni::withCount('alumni')->get();
        return view('master-data.alumni.admin.bukualumni.index', $data);
    }

    public function show(BukuAlumni $bukualumnus)
    {
        $data['bukualumnus'] = $bukualumnus;
        $data['list_bukualumni'] = Alumni::all();
        return view('master-data.alumni.admin.bukualumni.show', $data);
    }

    public function create()
    {
        return view('master-data.alumni.admin.bukualumni.create');
    }

    public function store(BukuAlumniRequest $request)
    {
        $bukualumnus = new BukuAlumni;
        $bukualumnus->program_studi = request('program_studi');
        $bukualumnus->tahun_lulus = request('tahun_lulus');
        $bukualumnus->save();

        return redirect('alumni/admin/bukualumni')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(BukuAlumni $bukualumnus)
    {
        $data['bukualumni'] = $bukualumnus;
        return view('master-data.alumni.admin.bukualumni.edit', $data);
    }

    public function update(BukuAlumni $bukualumnus)
    {
        $bukualumnus->program_studi = request('program_studi');
        $bukualumnus->tahun_lulus = request('tahun_lulus');
        $bukualumnus->save();

        return redirect('alumni/admin/bukualumni')->with('success', 'Data berhasil diedit');
    }

    public function destroy(BukuAlumni $bukualumnus)
    {
        $bukualumnus->delete();

        return redirect('alumni/admin/bukualumni')->with('danger', 'Data berhasil dihapus');
    }
}
