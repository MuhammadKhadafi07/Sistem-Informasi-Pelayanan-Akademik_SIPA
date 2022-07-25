<x-module.pengajuansuratketeranganaktif.admin>
    <x-template.button.back-button url="pengajuansuratketeranganaktif/admin/pengajuanmasuk" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambahkan Keterangan Ditolak</div>
        </div>
        <div class="card-body">
            <form
                action="{{ url('pengajuansuratketeranganaktif/admin/pengajuanmasuk/tolak', $pengajuansuratketeranganaktif->id) }}"
                method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Keterangan</label>
                            @if ($errors->has('pesan_admin'))
                                <label for=""
                                    class="label text-danger">{{ $errors->get('pesan_admin')[0] }}</label>
                            @endif
                            <textarea name="pesan_admin" class="form-control"></textarea>
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
</x-module.pengajuansuratketeranganaktif.admin>
