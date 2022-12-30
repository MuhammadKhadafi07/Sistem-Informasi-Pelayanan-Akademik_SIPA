<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/pengajuansuratketeranganaktif" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Pengajuan Surat Keterangan Aktif</div>
        </div>
        <div class="card-body">
            <form action="{{ url('mahasiswa/pengajuansuratketeranganaktif', $pengajuansuratketeranganaktif->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Semester</label>
                            <select name="semester" class="form-control">
                                <option selected>{{$pengajuansuratketeranganaktif->semester}}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="control-label">No. Handphone</label>
                        <input type="number" name="no_telepon" class="form-control" value="{{$pengajuansuratketeranganaktif->no_telepon}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat Rumah Sekarang</label>
                            <input type="text" name="alamat_rumahsekarang" class="form-control" value="{{$pengajuansuratketeranganaktif->alamat_rumahsekarang}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Orang Tua</label>
                            <input type="text" name="nama_orangtua" class="form-control" value="{{$pengajuansuratketeranganaktif->nama_orangtua}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tempat Kerja Orang Tua</label>
                            <input type="text" name="tempat_kerja_orangtua" class="form-control" value="{{$pengajuansuratketeranganaktif->tempat_kerja_orangtua}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat Tinggal Orang Tua</label>
                            <input type="text" name="alamat_tinggal_orangtua" class="form-control" value="{{$pengajuansuratketeranganaktif->alamat_tinggal_orangtua}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Keperluan</label>
                            <label for="" class="text-danger">*jelaskan keperluan anda meminta surat keterangan
                                aktif</label>
                            <br>
                            <textarea name="keperluan" class="form-control">{{$pengajuansuratketeranganaktif->keperluan}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.mahasiswa>
