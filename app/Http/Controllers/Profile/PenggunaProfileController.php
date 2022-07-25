<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Http\Request;

class PenggunaProfileController extends Controller
{
    public function index()
    {
        $data['pengguna'] = auth()->guard('mahasiswa')->user();
        return view('profile.pengguna.index', $data);
    }

    public function edit(Mahasiswa $pengguna)
    {
        $data['pengguna'] = $pengguna;
        return view('profile.pengguna.edit', $data);
    }

    public function update(Mahasiswa $pengguna)
    {
        $pengguna->agama = request('agama');
        $pengguna->jenis_kelamin = request('jenis_kelamin');
        $pengguna->tempat_lahir = request('tempat_lahir');
        $pengguna->no_telepon = request('no_telepon');
        $pengguna->tanggal_lahir = request('tanggal_lahir');
        if(request('password')) $pengguna->password = request('password');
        $pengguna->save();

        if(request('foto')) $pengguna->handleUploadFoto();

        return redirect('profile/pengguna')->with('success', 'Data berhasil diedit');
    }
}
