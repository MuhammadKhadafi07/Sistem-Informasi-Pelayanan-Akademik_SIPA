<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/absen" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Absensi Kegiatan</div>
        </div>
        <div class="card-body">
            <form action="{{ url('mahasiswa/absen') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Kelompok</label>
                            <input type="text" name="nama_kelompok" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Materi Kegiatan</label>
                            <input type="text" name="materi_kegiatan" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Kegiatan</label>
                            <input type="date" name="tanggal_kegiatan" class="form-control">
                        </div>
                    </div>
                    <div class="col md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Bukti Kegiatan</label>
                            <input type="file" name="foto_bukti" accept=".jpg" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Total Anggota</label>
                            <input type="text" name="total_anggota" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Anggota Hadir</label>
                            <input type="text" name="jumlah_anggota_hadir" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Anggota Tidak Hadir</label>
                            <input type="text" name="jumlah_anggota_tidak_hadir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi</label>
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Anggota Hadir (Contoh: NIM_Nama, dst.)</label>
                            <textarea name="anggota_hadir" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Anggota Tidak Hadir (Contoh: NIM_Nama, dst.)</label>
                            <textarea name="anggota_tidak_hadir" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.mahasiswa>
