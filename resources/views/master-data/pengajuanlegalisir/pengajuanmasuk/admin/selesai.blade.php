<x-module.pengajuanlegalisir.admin>
    <div class="col-md-6">
        <x-template.button.back-button url="pengajuanlegalisir/admin/pengajuanlegalisir" />
        <div class="card">
            <div class="card-header">
                <div class="card-title">Atur Tanggal Pengambilan Legalisir</div>
            </div>
            <div class="card-body">
                <form
                    action="{{ url('pengajuanlegalisir/admin/pengajuanlegalisir/selesai', $pengajuanlegalisir->id) }}"
                    method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="" class="control-label">Tanggal</label>
                                        @if ($errors->has('tanggal_diambil'))
                                            <label for=""
                                                class="label text-danger">{{ $errors->get('tanggal_diambil')[0] }}</label>
                                        @endif
                                        <input type="date" name="tanggal_diambil" id=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-dark float-right"><i class="far fa-save"></i>
                                    Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-module.pengajuanlegalisir.admin>
