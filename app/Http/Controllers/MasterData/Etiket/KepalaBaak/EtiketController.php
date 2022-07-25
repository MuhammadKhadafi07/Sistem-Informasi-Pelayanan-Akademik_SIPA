<?php

namespace App\Http\Controllers\MasterData\Etiket\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\Etiket\Etiket;
use Illuminate\Http\Request;

class EtiketController extends Controller
{
    public function index()
    {
        $data['list_etiket'] = Etiket::all();
        return view('master-data.etiket.kepalabaak.data.index', $data);
    }

    public function show(Etiket $etiket)
    {
        $data['etiket'] = $etiket;
        return view('master-data.etiket.kepalabaak.data.show', $data);
    }
}
