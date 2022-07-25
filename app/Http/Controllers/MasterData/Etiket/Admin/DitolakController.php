<?php

namespace App\Http\Controllers\MasterData\Etiket\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Etiket\Etiket;
use Illuminate\Http\Request;

class DitolakController extends Controller
{
    public function index()
    {
        $data['list_ditolak'] = Etiket::all();
        return view('master-data.etiket.admin.ditolak.index', $data);
    }

    public function show(Etiket $ditolak)
    {
        $data['etiket'] = $ditolak;
        return view('master-data.etiket.admin.ditolak.show', $data);
    }

    public function proses(Etiket $ditolak)
    {
        $ditolak->status = 1;
        $ditolak->pesan_admin = null;
        $ditolak->save();

        return redirect('etiket/admin/ditolak')->with('warning', 'Berhasil dibatalkan');
    }
}
