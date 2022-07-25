<x-module.alumni>
    <x-template.button.back-button url="alumni/pengajuanpengambilanijazah" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Pengajuan Pengambilan Ijazah</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl class="row">
                        <dt class="col-md-3">Nama Lengkap</dt>
                        <dd class="col-md-9">: {{ $pengajuanpengambilanijazah->nama }}</dd>
                        <dt class="col-md-3">NIM</dt>
                        <dd class="col-md-9">: {{ $pengajuanpengambilanijazah->nim }}</dd>
                        <dt class="col-md-3">No. Handphone</dt>
                        <dd class="col-md-9">: {{ $pengajuanpengambilanijazah->no_hp }}</dd>
                        <dt class="col-md-3">Tanggal Pengajuan</dt>
                        <dd class="col-md-9">: {{ $pengajuanpengambilanijazah->tanggal_pengajuan_string }}</dd>
                    </dl>
                </div>
                <div class="col-md-5">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-dark">
                            <th>Perpustakaan</th>
                            <th>Jurusan</th>
                            <th>Alumni</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @if ($pengajuanpengambilanijazah->status_perpustakaan == 1)
                                        <label for="" class="btn btn-danger btn-sm"><i
                                                class="fas fa-times-circle"></i></label>
                                    @else
                                        <label for="" class="btn btn-success btn-sm"><i
                                                class="fas fa-check"></i></label>
                                    @endif
                                </td>
                                <td>
                                    @if ($pengajuanpengambilanijazah->status_jurusan == 1)
                                        <label for="" class="btn btn-danger btn-sm"><i
                                                class="fas fa-times-circle"></i></label>
                                    @else
                                        <label for="" class="btn btn-success btn-sm"><i
                                                class="fas fa-check"></i></label>
                                    @endif
                                </td>
                                <td>
                                    @if ($pengajuanpengambilanijazah->alumni)
                                        <label for="" class="btn btn-success btn-sm"><i
                                                class="fas fa-check"></i></label>
                                    @else
                                        <label for="" class="btn btn-danger btn-sm"><i
                                                class="fas fa-times-circle"></i></label>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-module.alumni>
