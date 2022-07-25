<?php

namespace App\Http\Controllers\Superadmin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Superadmin\MasterData\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Login $imagelogin)
    {
        $data['login'] = $imagelogin;
        $data['list_login'] = Login::all();
        return view('superadmin.master-data.imagelogin.index', $data);
    }

    public function update(Login $imagelogin)
    {
        $imagelogin->tanggal_diubah = request('tanggal_diubah');
        $imagelogin->save();

        if(request('foto')) $imagelogin->handleUploadFoto();

        return redirect('superadmin/master-data/imagelogin')->with('success', 'Image berhasil diubah');
    }
}
