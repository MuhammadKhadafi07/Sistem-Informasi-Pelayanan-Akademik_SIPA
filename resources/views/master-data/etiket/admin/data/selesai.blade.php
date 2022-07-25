<x-module.etiket.admin>
    <x-template.button.back-button url="etiket/admin/etiket" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambahkan Keterangan Selesai</div>
        </div>
        <div class="card-body">
            <form action="{{ url('etiket/admin/etiket', $etiket->id) }}/selesai" method="post">
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
</x-module.etiket.admin>
