<?php

namespace App\Http\Controllers\MasterData\Pkkmb\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pkkmb\Absen;
use Illuminate\Http\Request;

class PertemuanController extends Controller
{
    public function index()
    {
        // $data['list_absen'] = Absen::withCount('absen')->get();
        $data['list_absen'] = Absen::all();
        return view('master-data.pkkmb.absen.admin.index', $data);
    }

    public function show(Absen $absen)
    {
        $data['absen'] = $absen;

        return view('master-data.pkkmb.absen.admin.show', $data);
    }

    public function destroy(Absen $absen)
    {
        $absen->handleUploadFotoBukti();
        $absen->delete();

        return redirect('pkkmb/admin/absen')->with('danger', 'Data berhasil dihapus');
    }
}
