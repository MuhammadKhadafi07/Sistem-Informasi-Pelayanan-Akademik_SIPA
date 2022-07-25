<x-module.alumni>
    <x-template.button.back-button url="alumni/pengajuanlegalisir" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Pengajuan Legalisir</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <dl class="row">
                        <dt class="col-md-2">Nama Lengkap</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->nama }}</dd>
                        <dt class="col-md-2">NIM</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->nim }}</dd>
                        <dt class="col-md-2">No. Handphone</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->no_hp }}</dd>
                        <dt class="col-md-2">Tanggal Pengajuan</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->tanggal_pengajuan_string }}</dd>
                        <dt class="col-md-2">Status Pengajuan</dt>
                        <dd class="col-md-10">:
                            @if ($pengajuanlegalisir->status == 1)
                                <label for="" class="btn btn-warning btn-sm">Diproses</label>
                            @elseif($pengajuanlegalisir->status == 2)
                                <label for="" class="btn btn-success btn-sm">Selesai</label>
                            @elseif($pengajuanlegalisir->status == 3)
                                <label for="" class="btn btn-success btn-sm">Sudah diambil</label>
                            @endif
                        </dd>
                    </dl>
                    <hr>
                    <dl class="row">
                        <dt class="col-md-2">Jadwal Pengambilan</dt>
                        <dd class="col-md-10">:
                            @if ($pengajuanlegalisir->tanggal_diambil)
                                {{ $pengajuanlegalisir->tanggal_diambil_string }}
                            @else
                                -
                            @endif
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.alumni>
