<x-module.etiket.admin>
    <x-template.button.back-button url="etiket/admin/etiket" />
    <div class="card">
        <div class="card-header">
            <a href="{{ url('etiket/admin/etiket/tolak', $etiket->id) }}" class="btn btn-danger float-right btn-sm"><i
                    class="fas fa-times"></i> Tolak</a>
            <a href="{{ url('etiket/admin/etiket/selesai', $etiket->id) }}"
                class="btn btn-sm btn-success float-right"><i class="fas fa-check"></i> Selesai</a>
            <div class="card-title">Detail Etiket</div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <dl class="row">
                    <dt class="col-2">Status Pengguna</dt>
                    <dd class="col-10">: {{ $etiket->mahasiswa->is_alumni_string }}</dd>
                    <dt class="col-2">Nama Lengkap</dt>
                    <dd class="col-10">: {{ $etiket->mahasiswa->nama }}</dd>
                    <dt class="col-2">NIM</dt>
                    <dd class="col-10">: {{ $etiket->mahasiswa->nim }}</dd>
                    <dt class="col-2">Program Studi</dt>
                    <dd class="col-10">: {{ $etiket->mahasiswa->program_studi }}</dd>
                    <dt class="col-2">Angkatan</dt>
                    <dd class="col-10">: {{ $etiket->mahasiswa->angkatan }}</dd>
                    <dt class="col-2">Jenis Kelamin</dt>
                    <dd class="col-10">: {{ $etiket->mahasiswa->jenis_kelamin }}</dd>
                    <dt class="col-2">No. Handphone</dt>
                    <dd class="col-10">: {{ $etiket->mahasiswa->no_telepon }}</dd>
                </dl>
            </div>
            <hr>
            <div class="col-md-12">
                <dl class="row">
                    <dt class="col-2">Kategori Masalah</dt>
                    <dd class="col-10">: {{ $etiket->masalah }}</dd>
                    <dt class="col-2">Tingkat Masalah</dt>
                    <dd class="col-10">: {{ $etiket->tingkat_masalah }}</dd>
                    <dt class="col-2">Tanggal Pengajuan</dt>
                    <dd class="col-10">: {{ $etiket->tanggal_string }}</dd>
                    <dt class="col-2">File Bukti</dt>
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
                    <dt class="col-2">Deskripsi Masalah</dt>
                    <dd class="col-10">: {{ $etiket->keterangan }}</dd>
                </dl>
            </div>
        </div>
    </div>
</x-module.etiket.admin>
