<x-module.superadmin>
    <div class="row">
        <div class="col-md-3">
            @foreach ($list_login as $login)
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Image Sekarang</div>
                    </div>
                    <div class="card-body">
                        <img src="{{ url($login->foto) }}" alt="" class="img-fluid">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Image Login</div>
                </div>
                <div class="card-body">
                    <form action="{{ url('superadmin/master-data/imagelogin', $login->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" accept=".jpg">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-primary">*nama gambar wajib "sipa"</label>
                                    <label for="" class="text-primary">*rekomendasi gambar ukuran
                                        720 x 939</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal Diedit</label>
                                    <input type="date" name="tanggal_diubah" value="{{ $login->tanggal_diubah }}"
                                        class="form-control" required>
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
