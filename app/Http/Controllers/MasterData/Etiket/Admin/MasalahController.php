<?php

namespace App\Http\Controllers\MasterData\Etiket\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Etiket\Masalah;
use Illuminate\Http\Request;

class MasalahController extends Controller
{
    public function index()
    {
        $data['list_masalah'] = Masalah::all();
        return view('master-data.etiket.admin.masalah.index', $data);
    }

    public function store()
    {
        $masalah = new Masalah();
        $masalah->masalah = request('masalah');
        $masalah->save();

        return redirect('etiket/admin/masalah')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy(Masalah $masalah)
    {
        $masalah->delete();

        return redirect('etiket/admin/masalah')->with('danger', 'Data berhasil dihapus');
    }
}
