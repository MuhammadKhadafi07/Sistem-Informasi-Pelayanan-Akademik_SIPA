<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\Superadmin\Pengguna\StoreRequest;
use App\Http\Requests\Superadmin\Pengguna\UpdateRequest;
use App\Models\Admin\Alumni\Alumni;
use App\Models\Admin\Etiket\Etiket;
use App\Models\Admin\PengajuanLegalisir\PengajuanLegalisir;
use App\Models\Admin\PengajuanPengambilanIjazah\PengajuanPengambilanIjazah;
use App\Models\Admin\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktif;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('superadmin.master-data.mahasiswa.index', $data);
    }

    public function create()
    {
        return view('superadmin.master-data.mahasiswa.create');
    }

    public function store(StoreRequest $request)
    {
        $mahasiswa = new Mahasiswa;
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

        return redirect('superadmin/master-data/mahasiswa')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('superadmin.master-data.mahasiswa.show', $data);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;

        return view('superadmin.master-data.mahasiswa.edit', $data);
    }

    public function update(Mahasiswa $mahasiswa)
    {
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
        if(request('password')) $mahasiswa->password = request('password');
        $mahasiswa->save();

        if(request('foto')) $mahasiswa->handleUploadFoto();

        return redirect('superadmin/master-data/mahasiswa')->with('success', 'Data berhasil diedit');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->handleDelete();

        $list_etiket = Etiket::where('id_mahasiswa', $mahasiswa->id)->get();
        if($list_etiket->count() > 0){
            $list_etiket->each(function($etiket){
                $etiket->delete();
            });
        }

        $list_pengajuansuratketeranganaktif = PengajuanSuratKeteranganAktif::where('id_mahasiswa', $mahasiswa->id)->get();
        if($list_pengajuansuratketeranganaktif->count() > 0){
            $list_pengajuansuratketeranganaktif->each(function($pengajuansuratketeranganaktif){
                $pengajuansuratketeranganaktif->delete();
            });
        }

        $list_pengajuanpengambilanijazah = PengajuanPengambilanIjazah::where('id', $mahasiswa->id)->get();
        if($list_pengajuanpengambilanijazah->count() > 0){
            $list_pengajuanpengambilanijazah->each(function($pengajuanpengambilanijazah){
                $pengajuanpengambilanijazah->delete();
            });
        }

        $list_alumni = Alumni::where('id', $mahasiswa->id)->get();
        if($list_alumni->count() > 0){
            $list_alumni->each(function($alumni){
                $alumni->delete();
            });
        }

        $list_pengajuanlegalisir = PengajuanLegalisir::where('id_mahasiswa', $mahasiswa->id)->get();
        if($list_pengajuanlegalisir->count() > 0){
            $list_pengajuanlegalisir->each(function($pengajuanlegalisir){
                $pengajuanlegalisir->delete();
            });
        }

        $mahasiswa->delete();
        return redirect('superadmin/master-data/mahasiswa')->with('danger', 'Data berhasil dihapus');
    }
}
