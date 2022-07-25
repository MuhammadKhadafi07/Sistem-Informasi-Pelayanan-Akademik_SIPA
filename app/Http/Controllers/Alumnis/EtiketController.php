<?php

namespace App\Http\Controllers\Alumnis;

use App\Http\Controllers\Controller;
use App\Http\Requests\Alumni\Etiket\StoreRequest;
use App\Models\Admin\Etiket\Etiket;
use App\Models\Admin\Etiket\Masalah;
use Illuminate\Http\Request;

class EtiketController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $data['list_etiket'] = $user->etiket;
        return view('alumnis.etiket.index', $data);
    }

    public function create()
    {
        $data['list_masalah'] = Masalah::all();
        return view('alumnis.etiket.create', $data);
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

        return redirect('alumni/etiket')->with('success', 'Etiket berhasil terkirim');
    }

    public function show(Etiket $etiket)
    {
        $data['etiket'] = $etiket;

        return view('alumnis.etiket.show', $data);
    }
}
