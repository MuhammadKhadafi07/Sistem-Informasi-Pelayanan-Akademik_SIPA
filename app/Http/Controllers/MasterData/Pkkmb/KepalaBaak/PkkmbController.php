<?php

namespace App\Http\Controllers\MasterData\Pkkmb\KepalaBaak;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pkkmb\Pkkmb;
use Illuminate\Http\Request;

class PkkmbController extends Controller
{
    public function index()
    {
        $data['list_pkkmb'] = Pkkmb::all();
        return view('master-data.pkkmb.data.kepalabaak.index', $data);
    }

    public function show(Pkkmb $pkkmb)
    {
        $data['pkkmb'] = $pkkmb;

        return view('master-data.pkkmb.data.kepalabaak.show', $data);
    }

    function filter()
    {
        $program_studi = request('program_studi');
        $data['list_pkkmb'] = Pkkmb::where('program_studi', 'like', "%$program_studi%")->get();
        $data['program_studi'] = $program_studi;

        return view('master-data.pkkmb.data.kepalabaak.index', $data);
    }
}
