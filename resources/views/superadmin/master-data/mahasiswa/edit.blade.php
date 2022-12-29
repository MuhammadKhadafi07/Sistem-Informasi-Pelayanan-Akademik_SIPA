<x-module.superadmin>
    <x-template.button.back-button url="superadmin/master-data/mahasiswa" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($mahasiswa->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Data Pengguna</div>
                </div>
                <div class="card-body">
                    <form action="{{ url('superadmin/master-data/mahasiswa', $mahasiswa->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NIM</label>
                                    <input type="text" name="nim" value="{{ $mahasiswa->nim }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" name="foto" class="form-control"
                                        accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Program Studi</label>
                                    <select name="program_studi" class="form-control" required>
                                        <option selected>{{ $mahasiswa->program_studi }}</option>
                                        <option value="Pemeliharaan Mesin">Pemeliharaan Mesin</option>
                                        <option value="Teknologi Pertambangan">Teknologi Pertambangan</option>
                                        <option value="Teknologi Hasil Perkebunan">Teknologi Hasil Perkebunan</option>
                                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                                        <option value="Agroindustri">Agroindustri</option>
                                        <option value="Teknologi Listrik">Teknologi Listrik</option>
                                        <option value="Teknologi Rekayasa Konstruksi Jalan dan Jembatan">Teknologi
                                            Rekayasa
                                            Konstruksi Jalan dan Jembatan</option>
                                        <option value="Teknologi Produksi Tanaman Perkebunan">Teknologi Produksi Tanaman
                                            Perkebunan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Agama</label>
                                    <select name="agama" class="form-control" required>
                                        <option selected>{{ $mahasiswa->agama }}</option>
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
                                    <label for="" class="control-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" required>
                                        <Option selected>{{ $mahasiswa->jenis_kelamin }}</Option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tahun Masuk</label>
                                    {{-- Permintaan dari client, judul angkatan diubah ke tahun masuk --}}
                                    <select name="angkatan" class="form-control" required>
                                        <option selected>{{ $mahasiswa->angkatan }}</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option>
                                        <option value="2039">2039</option>
                                        <option value="2040">2040</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">No Telepon</label>
                                    <input type="text" name="no_telepon" value="{{ $mahasiswa->no_telepon }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Status</label>
                                    <select name="is_alumni" class="form-control">
                                        <option value="">{{ $mahasiswa->is_alumni_string }}</option>
                                        <option value="">Mahasiswa</option>
                                        <option value="1">Alumni</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control">
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
        </div>
    </div>
</x-module.superadmin>
