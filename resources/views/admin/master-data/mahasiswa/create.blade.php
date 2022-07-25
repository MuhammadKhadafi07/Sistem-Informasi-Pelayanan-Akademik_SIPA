<x-module.admin>
    <x-template.button.back-button url="admin/master-data/mahasiswa" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Data Pengguna</div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/mahasiswa') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIM</label>
                            @if ($errors->has('nim'))
                                <label for="" class="label text-danger">{{ $errors->get('nim')[0] }}</label>
                            @endif
                            <input type="number" name="nim" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Lengkap</label>
                            @if ($errors->has('nama'))
                                <label for="" class="label text-danger">{{ $errors->get('nama')[0] }}</label>
                            @endif
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            @if ($errors->has('foto'))
                                <label for="" class="label text-danger">{{ $errors->get('foto')[0] }}</label>
                            @endif
                            <input type="file" name="foto" accept=".jpg, .png, .jpeg" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi</label>
                            @if ($errors->has('program_studi'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('program_studi')[0] }}</label>
                            @endif
                            <select name="program_studi" class="form-control">
                                <option disabled selected>Pilih opsi</option>
                                <option value="Pemeliharaan Mesin">Pemeliharaan Mesin</option>
                                <option value="Teknologi Pertambangan">Teknologi Pertambangan</option>
                                <option value="Teknologi Hasil Perkebunan">Teknologi Hasil Perkebunan</option>
                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                                <option value="Agroindustri">Agroindustri</option>
                                <option value="Teknologi Listrik">Teknologi Listrik</option>
                                <option value="Teknologi Rekayasa Konstruksi Jalan dan Jembatan">Teknologi Rekayasa
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
                            @if ($errors->has('agama'))
                                <label for="" class="label text-danger">{{ $errors->get('agama')[0] }}</label>
                            @endif
                            <select name="agama" class="form-control">
                                <option disabled selected>Pilih Opsi</option>
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
                            @if ($errors->has('jenis_kelamin'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('jenis_kelamin')[0] }}</label>
                            @endif
                            <select name="jenis_kelamin" class="form-control">
                                <Option disabled selected>Pilih opsi</Option>
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
                            @if ($errors->has('tempat_lahir'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('tempat_lahir')[0] }}</label>
                            @endif
                            <input type="text" name="tempat_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Lahir</label>
                            @if ($errors->has('tanggal_lahir'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('tanggal_lahir')[0] }}</label>
                            @endif
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Angkatan</label>
                            @if ($errors->has('angkatan'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('angkatan')[0] }}</label>
                            @endif
                            <select name="angkatan" class="form-control">
                                <option selected disabled>Pilih opsi</option>
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
                            <label for="" class="control-label">No. Handphone</label>
                            @if ($errors->has('no_telepon'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('no_telepon')[0] }}</label>
                            @endif
                            <input type="number" name="no_telepon" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Status</label>
                            <select name="is_alumni" class="form-control">
                                <option value="">Mahasiswa</option>
                                <option value="1">Alumni</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            @if ($errors->has('password'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('password')[0] }}</label>
                            @endif
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
</x-module.admin>
