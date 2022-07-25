<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/etiket" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Etiket</div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <dl class="row">
                    <dt class="col-md-2">Kategori Masalah</dt>
                    <dd class="col-md-10">: {{ $etiket->masalah }}</dd>
                    <dt class="col-md-2">Tingkat Masalah</dt>
                    <dd class="col-md-10">: {{ $etiket->tingkat_masalah }}</dd>
                    <dt class="col-md-2">Tanggal Pengajuan</dt>
                    <dd class="col-md-10">: {{ $etiket->tanggal_string }}</dd>
                    <dt class="col-md-2">File Bukti</dt>
                    @if ($etiket->foto_bukti)
                        <dd class="col-10">:
                            <a href="" target="popup"
                                onclick="window.open('{{ url($etiket->foto_bukti) }}','popup','width=800,height=600'); return false;"
                                class=" btn btn-dark btn-sm">
                                <i class="fa fa-download"></i>
                                Lihat Bukti
                            </a>
                        </dd>
                    @else
                        <dd class="col-10">: -</dd>
                    @endif
                    <dt class="col-md-2">Deskripsi Masalah</dt>
                    <dd class="col-md-10">: {{ $etiket->keterangan }}</dd>
                </dl>
            </div>
            <hr>
            <div class="col-md-12">
                <dl class="row">
                    <dt class="col-md-2">Status Pengajuan</dt>
                    <dd class="col-md-10">:
                        @if ($etiket->status == 1)
                            <label for="" class="btn btn-warning btn-sm">Diproses</label>
                        @elseif($etiket->status == 2)
                            <label for="" class="btn btn-success btn-sm">Selesai</label>
                        @elseif($etiket->status == 3)
                            <label for="" class="btn btn-danger btn-sm">Ditolak</label>
                        @endif
                    </dd>
                    <dt class="col-md-2">Keterangan Pengajuan</dt>
                    <dd class="col-md-10">:
                        @if ($etiket->status == 1)
                            Sedang diproses
                        @elseif($etiket->pesan_admin)
                            {{ $etiket->pesan_admin }}
                        @endif
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</x-module.mahasiswa>
