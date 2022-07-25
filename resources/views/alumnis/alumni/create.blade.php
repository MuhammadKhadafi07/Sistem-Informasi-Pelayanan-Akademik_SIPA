<x-module.alumni>
    <x-template.button.back-button url="alumni/alumnis" />
    <form action="{{ url('alumni/alumnis') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header bg-light">
                <div class="card-title">Input Data Alumni</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="id" value="{{ $mahasiswa->id }}">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            @if ($errors->has('email'))
                                <label for="" class="label text-danger">{{ $errors->get('email')[0] }}</label>
                            @endif
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Foto 3x4 Warna</label>
                            @if ($errors->has('foto'))
                                <label for="" class="label text-danger">{{ $errors->get('foto')[0] }}</label>
                            @endif
                            <input type="file" name="foto" accept=".jpg, .png, .jpeg" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat Sekarang</label>
                            @if ($errors->has('alamat'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('alamat')[0] }}</label>
                            @endif
                            <input type="text" name="alamat" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi - Tahun Lulus
                                Kuliah</label>
                            @if ($errors->has('id_bukualumni'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('id_bukualumni')[0] }}</label>
                            @endif
                            <select name="id_bukualumni" class="form-control">
                                <option selected disabled>Pilih opsi</option>
                                @foreach ($list_bukualumni as $bukualumni)
                                    <option value="{{ $bukualumni->id }}">
                                        {{ $bukualumni->program_studi }} -
                                        {{ $bukualumni->tahun_lulus }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">No. Handphone/ Whatsapp</label>
                            @if ($errors->has('no_hp'))
                                <label for="" class="label text-danger">{{ $errors->get('no_hp')[0] }}</label>
                            @endif
                            <input type="number" name="no_hp" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kegiatan Sekarang</label>
                            @if ($errors->has('kegiatan_sekarang'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('kegiatan_sekarang')[0] }}</label>
                            @endif
                            <select name="kegiatan_sekarang" class="form-control" id="kelas1">
                                <option selected disabled>Pilih opsi</option>
                                <option value="Bekerja">Bekerja</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Studi Lanjut">Studi Lanjut</option>
                                <option value="Belum Bekerja">Belum Bekerja</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" id="kelas2">
            <div class="card-header bg-light">
                <div class="card-title">Data Pekerjaan</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Jenis Pekerjaan</label>
                            <select name="jenis_pekerjaan" class="form-control" id="jenis_pekerjaan1">
                                <option selected>Pilih opsi</option>
                                <option value="ASN/ PNS/ TNI-POLRI/ Perangkat Desa">ASN/ PNS/ TNI-POLRI/
                                    Perangkat Desa
                                </option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Karyawan Swasta/ BUMN/ BUMD/ BUMDES">Karyawan Swasta/ BUMN/ BUMD/
                                    BUMDES
                                </option>
                                <option value="1">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" id="jenis_pekerjaan2">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Lainnya</div>
                                </div>
                                <input type="text" name="jenis_pekerjaan_lainnya" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Perusahaan Tempat Kerja</label>
                            <input type="text" name="nama_perusahaan" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Kategori Perusahaan</label>
                            <select name="kategori_perusahaan" class="form-control" id="kategori_perusahaan1">
                                <option selected>Pilih opsi</option>
                                <option value="Perusahaan Lokal">Perusahaan Lokal</option>
                                <option value="Perusahaan Nasional">Perusahaan Nasional</option>
                                <option value="Lebih dari 5 Juta">Perusahaan Multinasional/
                                    Internasional
                                </option>
                                <option value="1">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="kategori_perusahaan2">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Lainnya</div>
                                </div>
                                <input type="text" name="kategori_perusahaan_lainnya" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Posisi/ Jabatan Saat Ini</label>
                            <input type="text" name="jabatan" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Waktu Yang Diperlukan Untuk Memperoleh
                                Pekerjaan Setelah Kelulusan</label>
                            <select name="waktu_tunggu_kerja" class="form-control">
                                <option selected>Pilih opsi</option>
                                <option value="0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus">0 Bulan/
                                    Langsung
                                    Bekerja/ Dipesan Sebelum Lulus</option>
                                <option value="Waktu Tunggu Kurang dari 3 Bulan">Waktu Tunggu Kurang dari 3
                                    Bulan
                                </option>
                                <option value="Waktu Tunggu Antara 3-6 Bulan">Waktu Tunggu Antara 3-6 Bulan
                                </option>
                                <option value="Waktu Tunggu Lebih dari 6 Bulan">Waktu Tunggu Lebih dari 6 Bulan
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Kesesuaian Kompetensi dengan Bidang
                                Pekerjaan</label>
                            <select name="kesesuaian_kompetensi" class="form-control">
                                <option selected>Pilih opsi</option>
                                <option value="Sangat Sesuai">Sangat Sesuai</option>
                                <option value="Sesuai">Sesuai</option>
                                <option value="Kurang Sesuai">Kurang Sesuai</option>
                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Gaji Pertama Saat Bekerja</label>
                            <select name="gaji_pertama" class="form-control">
                                <option selected>Pilih opsi</option>
                                <option value="Kurang dari 3 Juta">Kurang dari 3 Juta</option>
                                <option value="3 Juta - 5 Juta">3 Juta - 5 Juta</option>
                                <option value="Lebih dari 5 Juta">Lebih dari 5 Juta</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-light">
                <div class="card-title">Penutup</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="label control-label">Saran dan Masukan Alumni Untuk
                                POLITAP
                            </label>
                            @if ($errors->has('saran_masukan'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('saran_masukan')[0] }}</label>
                            @endif
                            <textarea name="saran_masukan" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="label control-label">Kesan Alumni Berkuliah di
                                POLITAP
                            </label>
                            @if ($errors->has('kesan'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('kesan')[0] }}</label>
                            @endif
                            <textarea name="kesan" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right mt-3"><i class="far fa-save"></i>
                            Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-module.alumni>

<script>
    $(document).ready(function() {

        $('#kelas2').hide();
        $('#kelas1').on("change", function() {
            // $('#kelas1').prop('selectedIndex', 'pilih')
            if ($(this).val() === "Bekerja") {
                $('#kelas2').show();
                // console.log('aria');
            } else {
                $('#kelas2').hide();
            }
        })
    });
</script>

<script>
    $(document).ready(function() {

        $('#jenis_pekerjaan2').hide();
        $('#jenis_pekerjaan1').on("change", function() {
            // $('#kelas1').prop('selectedIndex', 'pilih')
            if ($(this).val() === "1") {
                $('#jenis_pekerjaan2').show();
                // console.log('aria');
            } else {
                $('#jenis_pekerjaan2').hide();
            }
        })
    });
</script>

<script>
    $(document).ready(function() {

        $('#kategori_perusahaan2').hide();
        $('#kategori_perusahaan1').on("change", function() {
            // $('#kelas1').prop('selectedIndex', 'pilih')
            if ($(this).val() === "1") {
                $('#kategori_perusahaan2').show();
                // console.log('aria');
            } else {
                $('#kategori_perusahaan2').hide();
            }
        })
    });
</script>
