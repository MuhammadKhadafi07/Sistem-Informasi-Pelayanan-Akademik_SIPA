<?php

namespace App\Http\Controllers\MasterData\Etiket\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Etiket\EtiketMasuk\SelesaiRequest;
use App\Http\Requests\Admin\Etiket\EtiketMasuk\TolakRequest;
use App\Models\Admin\Etiket\Etiket;
use App\Models\Admin\Etiket\Masalah;

class EtiketController extends Controller
{
    public function index()
    {
        $data['list_etiket'] = Etiket::all();
        return view('master-data.etiket.admin.data.index', $data);
    }

    public function show(Etiket $etiket)
    {
        $data['etiket'] = $etiket;
        return view('master-data.etiket.admin.data.show', $data);
    }

    public function tolak(Etiket $tolak)
    {
        $data['etiket'] = $tolak;
        return view('master-data.etiket.admin.data.tolak', $data);
    }
    
    public function keteranganditolak(Etiket $keteranganditolak, TolakRequest $request)
    {
        $keteranganditolak->pesan_admin = request('pesan_admin');
        $keteranganditolak->status = 3;
        $keteranganditolak->save();

        return redirect('etiket/admin/etiket')->with('success', 'Etiket berhasil ditolak');
        
    }

    public function selesai(Etiket $selesai)
    {
        $data['etiket'] = $selesai;
        return view('master-data.etiket.admin.data.selesai', $data);
    }
    
    public function keteranganselesai(Etiket $keteranganselesai, SelesaiRequest $request)
    {
        $keteranganselesai->pesan_admin = request('pesan_admin');
        $keteranganselesai->status = 2;
        $keteranganselesai->save();

        return redirect('etiket/admin/etiket')->with('success', 'Etiket Selesai');
        
    }
}
