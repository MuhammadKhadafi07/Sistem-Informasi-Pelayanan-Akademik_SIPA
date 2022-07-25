<x-module.pengajuansuratketeranganaktif.admin>
    <x-template.button.back-button url="pengajuansuratketeranganaktif/admin/pengajuandisetujui" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Upload Surat</div>
        </div>
        <div class="card-body">
            <form
                action="{{ url('pengajuansuratketeranganaktif/admin/pengajuandisetujui/kirimsurat', $pengajuansuratketeranganaktif->id) }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Upload File</label>
                            <input type="file" name="surat_keteranganaktif" accept=".pdf" class="form-control">
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
