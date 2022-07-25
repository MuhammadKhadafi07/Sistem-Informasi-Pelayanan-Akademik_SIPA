<?php

namespace App\Http\Controllers\MasterData\Etiket\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\Etiket\Etiket;
use Illuminate\Http\Request;

class DitolakController extends Controller
{
    public function index()
    {
        $data['list_ditolak'] = Etiket::all();
        return view('master-data.etiket.kepalabaak.ditolak.index', $data);
    }

    public function show(Etiket $ditolak)
    {
        $data['etiket'] = $ditolak;
        return view('master-data.etiket.kepalabaak.ditolak.show', $data);
    }
}
