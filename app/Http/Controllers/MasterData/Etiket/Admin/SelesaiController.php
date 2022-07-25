<?php

namespace App\Http\Controllers\MasterData\Etiket\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Etiket\Etiket;
use Illuminate\Http\Request;

class SelesaiController extends Controller
{
    public function index()
    {
        $data['list_selesai'] = Etiket::all();
        return view('master-data.etiket.admin.selesai.index', $data);
    }

    public function show(Etiket $selesai)
    {
        $data['etiket'] = $selesai;
        return view('master-data.etiket.admin.selesai.show', $data);
    }

    public function proses($id)
    {
        $etiket = Etiket::find($id);
        $etiket->status = 1;
        $etiket->pesan_admin = null;
        $etiket->save();

        return redirect('etiket/admin/selesai')->with('warning', 'Berhasil dibatalkan');
    }
}
