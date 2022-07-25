<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/pengajuansuratketeranganaktif" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pengajuan Surat Keterangan Aktif</div>
        </div>
        <div class="card-body">
            <form action="{{ url('mahasiswa/pengajuansuratketeranganaktif') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Semester</label>
                            @if ($errors->has('semester'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('semester')[0] }}</label>
                            @endif
                            <select name="semester" class="form-control">
                                <option selected disabled>Pilih opsi</option>
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
                        @if ($errors->has('no_telepon'))
                            <label for=""
                                class="label text-danger">{{ $errors->get('no_telepon')[0] }}</label>
                        @endif
                        <input type="number" name="no_telepon" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat Rumah Sekarang</label>
                            @if ($errors->has('alamat_rumahsekarang'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('alamat_rumahsekarang')[0] }}</label>
                            @endif
                            <input type="text" name="alamat_rumahsekarang" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Orang Tua</label>
                            @if ($errors->has('nama_orangtua'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('nama_orangtua')[0] }}</label>
                            @endif
                            <input type="text" name="nama_orangtua" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tempat Kerja Orang Tua</label>
                            @if ($errors->has('tempat_kerja_orangtua'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('tempat_kerja_orangtua')[0] }}</label>
                            @endif
                            <input type="text" name="tempat_kerja_orangtua" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat Tinggal Orang Tua</label>
                            @if ($errors->has('alamat_tinggal_orangtua'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('alamat_tinggal_orangtua')[0] }}</label>
                            @endif
                            <input type="text" name="alamat_tinggal_orangtua" class="form-control">
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
                            @if ($errors->has('keperluan'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('keperluan')[0] }}</label>
                            @endif
                            <textarea name="keperluan" class="form-control"></textarea>
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
