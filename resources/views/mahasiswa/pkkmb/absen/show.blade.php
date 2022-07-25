<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/absen" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Absen PKKMB</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <dl>
                        <dt>Nama Kelompok</dt>
                        <dd>{{ $absen->nama_kelompok }}</dd>
                        <dt>Program Studi</dt>
                        <dd>{{ $absen->program_studi }}</dd>
                        <dt>Materi Kegiatan</dt>
                        <dd>{{ $absen->materi_kegiatan }}</dd>
                        <dt>Tanggal Kegiatan</dt>
                        <dd>{{ $absen->tanggal_kegiatan_string }}</dd>
                        <dt>Bukti Kegiatan</dt>
                        <dl>
                            <a href="" target="popup"
                                onclick="window.open('{{ url($absen->foto_bukti) }}','popup','width=800,height=600'); return false;"
                                class=" btn btn-dark btn-sm">
                                <i class="fa fa-download"></i>
                                Lihat Bukti
                            </a>
                        </dl>
                        <dt>Total Anggota</dt>
                        <dd>{{ $absen->total_anggota }}</dd>
                        <dt>Jumlah Anggota Hadir</dt>
                        <dd>{{ $absen->jumlah_anggota_hadir }}</dd>
                        <dt>Jumlah Tidak Anggota Hadir</dt>
                        <dd>{{ $absen->jumlah_anggota_tidak_hadir }}</dd>
                        <dt>Anggota Hadir</dt>
                        <dd>{{ $absen->anggota_hadir }}</dd>
                        <dt>Anggota Tidak Hadir</dt>
                        <dd>{{ $absen->anggota_tidak_hadir }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.mahasiswa>
