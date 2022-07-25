<x-module.alumni.admin>
    <x-template.button.back-button url="alumni/admin/bukualumni" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Buku Alumni</div>
        </div>
        <div class="card-body">
            <form action="{{ url('alumni/admin/bukualumni', $bukualumni->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi</label>
                            @if ($errors->has('program_studi'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('program_studi')[0] }}</label>
                            @endif
                            <select name="program_studi" class="form-control" required>
                                <option selected>{{ $bukualumni->program_studi }}</option>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tahun Lulus Kuliah</label>
                            @if ($errors->has('tahun_lulus'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('tahun_lulus')[0] }}</label>
                            @endif
                            <input type="number" name="tahun_lulus" class="form-control" required
                                value="{{ $bukualumni->tahun_lulus }}">
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
</x-module.alumni.admin>
