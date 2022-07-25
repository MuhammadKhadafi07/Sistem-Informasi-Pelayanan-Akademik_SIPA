<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mahasiswa\Etiket\StoreRequest;
use App\Models\Admin\Etiket\Etiket;
use App\Models\Admin\Etiket\Masalah;
use Illuminate\Http\Request;

class EtiketController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $data['list_etiket'] = $user->etiket;
        return view('mahasiswa.etiket.index', $data);
    }

    public function create()
    {
        $data['list_masalah'] = Masalah::all();
        return view('mahasiswa.etiket.create', $data);
    }

    public function store(StoreRequest $request)
    {
        $etiket = new Etiket();
        $etiket->id_mahasiswa = request()->user()->id;
        $etiket->masalah = request('masalah');
        $etiket->tingkat_masalah = request('tingkat_masalah');
        $etiket->keterangan = request('keterangan');
        $etiket->status = 1;
        $etiket->save();

        $etiket->handleUploadFotoBukti();

        return redirect('mahasiswa/etiket')->with('success', 'Data berhasil terkirim');
    }

    public function show(Etiket $etiket)
    {
        $data['etiket'] = $etiket;

        return view('mahasiswa.etiket.show', $data);
    }
}
