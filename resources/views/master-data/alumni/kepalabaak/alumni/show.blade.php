<x-module.alumni.kepalabaak>
    <x-template.button.back-button url="alumni/kepalabaak/alumni" />
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($alumnus->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Detail Alumni</div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <dl class="row">
                            <dt class="col-3">Nama Lengkap</dt>
                            <dd class="col-9">: {{ $alumnus->mahasiswa->nama }}</dd>
                            <dt class="col-3">NIM</dt>
                            <dd class="col-9">: {{ $alumnus->mahasiswa->nim }}</dd>
                            <dt class="col-3">Program Studi</dt>
                            <dd class="col-9">: {{ $alumnus->mahasiswa->program_studi }}</dd>
                            <dt class="col-3">Tahun Masuk</dt>
                            {{-- Permintaan dari client, judul angkatan diubah ke tahun masuk --}}
                            <dd class="col-9">: {{ $alumnus->mahasiswa->angkatan }}</dd>
                            <dt class="col-3">Agama</dt>
                            <dd class="col-9">: {{ $alumnus->mahasiswa->agama }}</dd>
                            <dt class="col-3">Jenis Kelamin</dt>
                            <dd class="col-9">: {{ $alumnus->mahasiswa->jenis_kelamin }}</dd>
                            <dt class="col-3">Tempat Lahir</dt>
                            <dd class="col-9">: {{ $alumnus->mahasiswa->tempat_lahir }}</dd>
                            <dt class="col-3">No. Handphone</dt>
                            <dd class="col-9">: {{ $alumnus->no_hp }}</dd>
                            <dt class="col-3">Tanggal Lahir</dt>
                            <dd class="col-9">: {{ $alumnus->mahasiswa->tanggal_lahir_string }}</dd>
                            <dt class="col-3">Alamat</dt>
                            <dd class="col-9">: {{ $alumnus->alamat }}</dd>
                            <dt class="col-3">Email</dt>
                            <dd class="col-9">: {{ $alumnus->email }}</dd>
                            @foreach ($list_bukualumni as $bukualumni)
                                @if (old('id_bukualumni', $alumnus->id_bukualumni) == $bukualumni->id)
                                    <dt class="col-3">Tahun Lulus Kuliah</dt>
                                    <dd class="col-9">: {{ $bukualumni->tahun_lulus }}</dd>
                                @endif
                            @endforeach
                            <dt class="col-3">Kegiatan Sekarang</dt>
                            <dd class="col-9">: {{ $alumnus->kegiatan_sekarang }}</dd>
                        </dl>
                        <hr>
                        <dl>
                            @if ($alumnus->jenis_pekerjaan == 1)
                                <dt>Jenis Pekerjaan</dt>
                                <dd>{{ $alumnus->jenis_pekerjaan_lainnya }}</dd>
                            @elseif($alumnus->jenis_pekerjaan)
                                <dt>Jenis Pekerjaan</dt>
                                <dd>{{ $alumnus->jenis_pekerjaan }}</dd>
                            @else
                                <dt>Jenis Pekerjaan</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumnus->nama_perusahaan)
                                <dt>Nama Perusahaan Tempat Kerja</dt>
                                <dd>{{ $alumnus->nama_perusahaan }}</dd>
                            @else
                                <dt>Nama Perusahaan Tempat Kerja</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumnus->kategori_perusahaan == 1)
                                <dt>Kategori Perusahaan</dt>
                                <dd>{{ $alumnus->kategori_perusahaan_lainnya }}</dd>
                            @elseif($alumnus->kategori_perusahaan)
                                <dt>Kategori Perusahaan</dt>
                                <dd>{{ $alumnus->kategori_perusahaan }}</dd>
                            @else
                                <dt>Kategori Perusahaan</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumnus->jabatan)
                                <dt>Posisi/ Jabatan Saat Ini</dt>
                                <dd>{{ $alumnus->jabatan }}</dd>
                            @else
                                <dt>Posisi/ Jabatan Saat Ini</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumnus->waktu_tunggu_kerja)
                                <dt>
                                    Waktu Yang Diperlukan Untuk Memperoleh Pekerjaan Setelah Kelulusan</dt>
                                <dd>{{ $alumnus->waktu_tunggu_kerja }}</dd>
                            @else
                                <dt>
                                    Waktu Yang Diperlukan Untuk Memperoleh Pekerjaan Setelah Kelulusan</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumnus->kesesuaian_kompetensi)
                                <dt>Kesesuaian Kompetensi dengan Bidang Pekerjaan</dt>
                                <dd>{{ $alumnus->kesesuaian_kompetensi }}</dd>
                            @else
                                <dt>Kesesuaian Kompetensi dengan Bidang Pekerjaan</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumnus->gaji_pertama)
                                <dt>Gaji Pertama Saat Bekerja</dt>
                                <dd>{{ $alumnus->gaji_pertama }}</dd>
                            @else
                                <dt>Gaji Pertama Saat Bekerja</dt>
                                <dd>-</dd>
                            @endif
                        </dl>
                        <hr>
                        <dl>
                            <dt>Saran dan Masukan Alumni Untuk POLITAP</dt>
                            <dd>{{ $alumnus->saran_masukan }}</dd>
                            <dt>Kesan Alumni Berkuliah di POLITAP</dt>
                            <dd>{{ $alumnus->kesan }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.alumni.kepalabaak>
