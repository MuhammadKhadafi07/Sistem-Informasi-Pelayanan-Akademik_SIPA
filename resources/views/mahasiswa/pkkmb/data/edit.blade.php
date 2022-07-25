<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/pkkmb" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($pkkmb->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Daftar PKKMB</div>
                </div>
                <div class="card-body">
                    <form action="{{ url('mahasiswa/pkkmb', $pkkmb->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NIM</label>
                                    <input type="text" name="nim" value="{{ $pkkmb->nim }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama</label>
                                    <input type="text" name="nama" value="{{ $pkkmb->nama }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Program Studi</label>
                                    <select name="program_studi" aria-label="default select example"
                                        class="form-control">
                                        <option selected>{{ $pkkmb->program_studi }}</option>
                                        <option value="Pemeliharaan Mesin">Pemeliharaan Mesin</option>
                                        <option value="Teknologi Pertambangan">Teknologi Pertambangan</option>
                                        <option value="Teknologi Hasil Perkebunan">Teknologi Hasil Perkebunan
                                        </option>
                                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                                        <option value="Agroindustri">Agroindustri</option>
                                        <option value="Teknologi Listrik">Teknologi Listrik</option>
                                        <option value="Teknologi Rekayasa Konstruksi Jalan dan Jembatan">Teknologi
                                            Rekayasa
                                            Konstruksi Jalan dan Jembatan</option>
                                        <option value="Teknologi Produksi Tanaman Perkebunan">Teknologi Produksi
                                            Tanaman
                                            Perkebunan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Angkatan</label>
                                    <input type="text" name="angkatan" value="{{ $pkkmb->angkatan }}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="control-label">Foto 3x4 Berwarna</label>
                                <input type="file" name="foto" accept=".jpg" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option selected>{{ $pkkmb->jenis_kelamin }}</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Agama</label>
                                    <select name="agama" class="form-control">
                                        <option selected>{{ $pkkmb->agama }}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">No Telepon</label>
                                    <input type="text" name="no_telepon" value="{{ $pkkmb->no_telepon }}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-dark float-right"><i class="fas fa-save"></i>
                                        Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-module.mahasiswa>
