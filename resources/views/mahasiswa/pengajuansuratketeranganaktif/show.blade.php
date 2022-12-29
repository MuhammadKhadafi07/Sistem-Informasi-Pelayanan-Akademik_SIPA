<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/pengajuansuratketeranganaktif" />
    <div class="card">
        <div class="card-header">
            @if ($pengajuansuratketeranganaktif->surat_keteranganaktif)
                <a href="" target="popup"
                    onclick="window.open('{{ url($pengajuansuratketeranganaktif->surat_keteranganaktif) }}','popup','width=800,height=600'); return false;"
                    class="btn btn-primary btn-sm float-right"><i class="fas fa-download"></i> Download Surat</a>
            @endif
            <div class="card-title">Detail Pengajuan Surat Keterangan Aktif</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align: center">
                        <h4><b>CATATAN</b></h4>
                        <p>Silahkan konfirmasi ke kontak berikut: Bu Henny 089668804846</p>
                    </div>
                    <hr>
                    <dl>
                        <dt>Tanggal Pengajuan</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->tanggal_pengajuan_string }}</dd>
                        <dt>Keperluan</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->keperluan }}</dd>
                        <hr>
                        <dt>Status Pengajuan</dt>
                        <dd>
                            @if ($pengajuansuratketeranganaktif->surat_keteranganaktif)
                                <label for="" class="btn btn-success btn-sm">Selesai</label>
                            @elseif ($pengajuansuratketeranganaktif->status == 1)
                                <label for="" class="btn btn-warning btn-sm">Diproses</label>
                            @elseif($pengajuansuratketeranganaktif->status == 2)
                                <label for="" class="btn btn-primary btn-sm">Disetujui</label>
                            @elseif($pengajuansuratketeranganaktif->status == 3)
                                <label for="" class="btn btn-danger btn-sm">Ditolak</label>
                            @endif
                        </dd>
                        <dt>Keterangan Pengajuan</dt>
                        @if ($pengajuansuratketeranganaktif->pesan_admin)
                            <dd>{{ $pengajuansuratketeranganaktif->pesan_admin }}</dd>
                        @elseif($pengajuansuratketeranganaktif->status == 1)
                            <dd>Pengajuan sedang diproses</dd>
                        @elseif($pengajuansuratketeranganaktif->surat_keteranganaktif)
                            <dd>Pengajuan selesai</dd>
                        @elseif($pengajuansuratketeranganaktif->status == 2)
                            <dd>Pengajuan disetujui</dd>
                        @endif
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.mahasiswa>
