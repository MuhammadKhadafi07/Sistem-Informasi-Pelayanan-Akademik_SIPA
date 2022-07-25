<x-module.alumni.admin>
    <x-template.button.back-button url="alumni/admin/alumni" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($alumnus->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <form action="{{ url('alumni/admin/alumni', $alumnus->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="card-title">Edit Data Alumni</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{ $alumnus->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto 3x4 Warna</label>
                                    <input type="file" name="foto" accept=".jpg, .png, .jpeg"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Alamat Sekarang</label>
                                    <input type="text" name="alamat" class="form-control"
                                        value="{{ $alumnus->alamat }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Program Studi - Tahun Lulus
                                        Kuliah</label>
                                    <select name="id_bukualumni" class="form-control">
                                        @foreach ($list_bukualumni as $bukualumni)
                                            @if (old('id_bukualumni', $alumnus->id_bukualumni) == $bukualumni->id)
                                                <option value="{{ $bukualumni->id }}" selected>
                                                    {{ $bukualumni->program_studi }} -
                                                    {{ $bukualumni->tahun_lulus }}</option>
                                            @else
                                                <option value="{{ $bukualumni->id }}">
                                                    {{ $bukualumni->program_studi }} -
                                                    {{ $bukualumni->tahun_lulus }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">No. Handphone/ Whatsapp</label>
                                    <input type="number" name="no_hp" class="form-control"
                                        value="{{ $alumnus->no_hp }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Kegiatan Sekarang</label>
                                    <select name="kegiatan_sekarang" class="form-control">
                                        <option selected>{{ $alumnus->kegiatan_sekarang }}</option>
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
                <div class="card" id="khadafi">
                    <div class="card-header bg-light">
                        <div class="card-title">Data Pekerjaan</div>
                        <label for="" class="label text-danger pl-1"> *Tidak perlu diisi jika belum
                            kerja.</label>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Jenis Pekerjaan</label>
                                    <select name="jenis_pekerjaan" class="form-control" id="jenis_pekerjaan1">
                                        @if ($alumnus->jenis_pekerjaan == 1)
                                            <option value="1" selected>{{ $alumnus->jenis_pekerjaan_lainnya }}
                                            </option>
                                        @else
                                            <option>{{ $alumnus->jenis_pekerjaan }}</option>
                                        @endif
                                        <option value=""></option>
                                        <option value="ASN/ PNS/ TNI-POLRI/ Perangkat Desa">ASN/ PNS/ TNI-POLRI/
                                            Perangkat Desa
                                        </option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Karyawan Swasta/ BUMN/ BUMD/ BUMDES">Karyawan Swasta/ BUMN/
                                            BUMD/
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
                                        <input type="text" name="jenis_pekerjaan_lainnya"
                                            value="{{ $alumnus->jenis_pekerjaan_lainnya }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Perusahaan Tempat Kerja</label>
                                    <input type="text" name="nama_perusahaan" class="form-control"
                                        value="{{ $alumnus->nama_perusahaan }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Kategori Perusahaan</label>
                                    <select name="kategori_perusahaan" class="form-control"
                                        id="kategori_perusahaan1">
                                        @if ($alumnus->kategori_perusahaan == 1)
                                            <option value="1" selected>
                                                {{ $alumnus->kategori_perusahaan_lainnya }}
                                            </option>
                                        @else
                                            <option>{{ $alumnus->kategori_perusahaan }}</option>
                                        @endif
                                        <option value=""></option>
                                        <option value="Perusahaan Lokal">Perusahaan Lokal</option>
                                        <option value="Perusahaan Nasional">Perusahaan Nasional</option>
                                        <option value="Perusahaan Multinasional/ Internasional">Perusahaan
                                            Multinasional/ Internasional
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
                                        <input type="text" name="kategori_perusahaan_lainnya" class="form-control"
                                            value="{{ $alumnus->kategori_perusahaan_lainnya }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Posisi/ Jabatan Saat Ini</label>
                                    <input type="text" name="jabatan" class="form-control"
                                        value="{{ $alumnus->jabatan }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Waktu Yang Diperlukan Untuk Memperoleh
                                        Pekerjaan Setelah Kelulusan</label>
                                    <select name="waktu_tunggu_kerja" class="form-control">
                                        <option selected>{{ $alumnus->waktu_tunggu_kerja }}</option>
                                        <option value=""></option>
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
                                        <option selected>{{ $alumnus->kesesuaian_kompetensi }}</option>
                                        <option value=""></option>
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
                                        <option selected>{{ $alumnus->gaji_pertama }}</option>
                                        <option value=""></option>
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
                                    <textarea name="saran_masukan" class="form-control">{{ $alumnus->saran_masukan }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="label control-label">Kesan Alumni Berkuliah di
                                        POLITAP
                                    </label>
                                    <textarea name="kesan" class="form-control">{{ $alumnus->kesan }}</textarea>
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
        </div>
    </div>
</x-module.alumni.admin>

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
