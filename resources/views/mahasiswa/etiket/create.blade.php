<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/etiket" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Etiket</div>
        </div>
        <div class="card-body">
            <form action="{{ url('mahasiswa/etiket') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Kategori Masalah</label>
                            @if ($errors->has('masalah'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('masalah')[0] }}</label>
                            @endif
                            <select name="masalah" class="form-control">
                                <option selected disabled>Pilih Opsi</option>
                                @foreach ($list_masalah as $masalah)
                                    <option value="{{ $masalah->masalah }}">{{ $masalah->masalah }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tingkat masalah</label>
                            @if ($errors->has('tingkat_masalah'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('tingkat_masalah')[0] }}</label>
                            @endif
                            <select name="tingkat_masalah" class="form-control">
                                <option disabled selected>Pilih opsi</option>
                                <option value="Ringan">Ringan</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Berat">Berat</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="control-label">File Bukti</label>
                        <input type="file" name="foto_bukti" accept=".jpg, .png, .jpeg, .pdf" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi Masalah</label>
                            @if ($errors->has('keterangan'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('keterangan')[0] }}</label>
                            @endif
                            <textarea name="keterangan" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.mahasiswa>
