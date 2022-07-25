<x-module.pkkmb.admin>
    <x-template.button.back-button url="pkkmb/admin/kelompok" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Kelompok</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pkkmb/admin/kelompok', $kelompok->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Angkatan</label>
                            <input type="text" name="angkatan" value="{{ $kelompok->angkatan }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi</label>
                            <select name="program_studi" class="form-control">
                                <option selected>{{ $kelompok->program_studi }}</option>
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
                            <label for="" class="control-label">kelompok</label>
                            <input type="text" name="kelompok" value="{{ $kelompok->kelompok }}"
                                class="form-control">
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
</x-module.pkkmb.admin>
