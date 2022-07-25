<x-module.alumni>
    <x-template.button.back-button url="alumni/pengajuanpengambilanijazah" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pengajuan Pengambilan Ijazah</div>
        </div>
        <div class="card-body">
            <form action="{{ url('alumni/pengajuanpengambilanijazah') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
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
                    <input type="hidden" value="{{ $mahasiswa->id }}" name="id">
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
                            <label for="" class="control-label">No. Handphone</label>
                            @if ($errors->has('no_hp'))
                                <label for="" class="label text-danger">{{ $errors->get('no_hp')[0] }}</label>
                            @endif
                            <input type="number" name="no_hp" class="form-control">
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
</x-module.alumni>
