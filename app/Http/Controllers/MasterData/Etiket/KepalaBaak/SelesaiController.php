<?php

namespace App\Http\Controllers\MasterData\Etiket\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\Etiket\Etiket;
use Illuminate\Http\Request;

class SelesaiController extends Controller
{
    public function index()
    {
        $data['list_selesai'] = Etiket::all();
        return view('master-data.etiket.kepalabaak.selesai.index', $data);
    }

    public function show(Etiket $selesai)
    {
        $data['etiket'] = $selesai;
        return view('master-data.etiket.kepalabaak.selesai.show', $data);
    }
}
