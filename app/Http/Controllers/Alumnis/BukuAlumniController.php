<?php

namespace App\Http\Controllers\Alumnis;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\Alumni\BukuAlumni;
use Illuminate\Http\Request;

class BukuAlumniController extends Controller
{
    public function index()
    {
        $data['list_bukualumni'] = BukuAlumni::withCount('alumni')->get();
        return view('alumnis.bukualumni.index', $data);
    }

    public function show(BukuAlumni $bukualumni)
    {
        $data['list_bukualumni'] = Alumni::all();
        $data['bukualumni'] = $bukualumni;
        return view('alumnis.bukualumni.show', $data);
    }

    // function filter()
    // {
    //     $program_studi = request('program_studi');
    //     $data['list_bukualumni'] = Alumni::where('program_studi', 'like', "%$program_studi%")->get();
    //     $data['program_studi'] = $program_studi;

    //     return view('alumnis.bukualumni.index', $data);
    // }
}
