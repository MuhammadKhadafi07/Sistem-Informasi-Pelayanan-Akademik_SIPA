<?php

namespace App\Http\Controllers\MasterData\Pkkmb\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pkkmb\Pkkmb;

class PkkmbController extends Controller
{
    public function index()
    {
        $data['list_pkkmb'] = Pkkmb::all();
        return view('master-data.pkkmb.data.admin.index', $data);
    }

    public function show(Pkkmb $pkkmb)
    {
        $data['pkkmb'] = $pkkmb;

        return view('master-data.pkkmb.data.admin.show', $data);
    }

    public function edit(Pkkmb $pkkmb)
    {
        $data['pkkmb'] = $pkkmb;
        
        return view('master-data.pkkmb.data.admin.edit', $data);
    }

    public function update(Pkkmb $pkkmb)
    {
        $pkkmb->nim = request('nim');
        $pkkmb->nama = request('nama');
        $pkkmb->agama = request('agama');
        $pkkmb->program_studi = request('program_studi');
        $pkkmb->angkatan = request('angkatan');
        $pkkmb->no_telepon = request('no_telepon');
        $pkkmb->jenis_kelamin = request('jenis_kelamin');
        $pkkmb->save();

        if(request('foto')) $pkkmb->handleUploadFoto();

        return redirect('pkkmb/admin/pkkmb')->with('success', 'Data berhasil diedit');
    }

    public function destroy(Pkkmb $pkkmb)
    {
        $pkkmb->handleDelete();
        $pkkmb->delete();

        return redirect('pkkmb/admin/pkkmb')->with('danger', 'Data berhasil dihapus');
    }

    function filter()
    {
        $program_studi = request('program_studi');
        $data['list_pkkmb'] = Pkkmb::where('program_studi', 'like', "%$program_studi%")->get();
        $data['program_studi'] = $program_studi;

        return view('master-data.pkkmb.data.admin.index', $data);
    }
}
