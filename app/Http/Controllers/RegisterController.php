<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\Register\StoreRequest;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(StoreRequest $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->program_studi = request('program_studi');
        $mahasiswa->agama = request('agama');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->no_telepon = request('no_telepon');
        $mahasiswa->angkatan = request('angkatan');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->is_alumni = request('is_alumni');
        $mahasiswa->password = request('password');
        $mahasiswa->save();

        $mahasiswa->handleUploadFoto();

        return redirect('login')->with('success', 'Akun berhasil terdaftar, silahkan login');
    }
}
