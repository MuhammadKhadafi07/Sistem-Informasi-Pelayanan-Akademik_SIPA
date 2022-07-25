<x-module.alumni>
    <x-template.button.back-button url="alumni/alumnis" />
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($alumni->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('alumni/alumnis', $alumni->id) }}/edit"
                        class="btn btn-warning btn-sm float-right"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">Detail Alumni</div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <dl class="row">
                            <dt class="col-3">Nama Lengkap</dt>
                            <dd class="col-9">: {{ $alumni->mahasiswa->nama }}</dd>
                            <dt class="col-3">NIM</dt>
                            <dd class="col-9">: {{ $alumni->mahasiswa->nim }}</dd>
                            <dt class="col-3">Program Studi</dt>
                            <dd class="col-9">: {{ $alumni->mahasiswa->program_studi }}</dd>
                            <dt class="col-3">Angkatan</dt>
                            <dd class="col-9">: {{ $alumni->mahasiswa->angkatan }}</dd>
                            <dt class="col-3">Agama</dt>
                            <dd class="col-9">: {{ $alumni->mahasiswa->agama }}</dd>
                            <dt class="col-3">Jenis Kelamin</dt>
                            <dd class="col-9">: {{ $alumni->mahasiswa->jenis_kelamin }}</dd>
                            <dt class="col-3">Tempat Lahir</dt>
                            <dd class="col-9">: {{ $alumni->mahasiswa->tempat_lahir }}</dd>
                            <dt class="col-3">No. Handphone</dt>
                            <dd class="col-9">: {{ $alumni->no_hp }}</dd>
                            <dt class="col-3">Tanggal Lahir</dt>
                            <dd class="col-9">: {{ $alumni->mahasiswa->tanggal_lahir_string }}</dd>
                            <dt class="col-3">Alamat</dt>
                            <dd class="col-9">: {{ $alumni->alamat }}</dd>
                            <dt class="col-3">Email</dt>
                            <dd class="col-9">: {{ $alumni->email }}</dd>
                            @foreach ($list_bukualumni as $bukualumni)
                                @if (old('id_bukualumni', $alumni->id_bukualumni) == $bukualumni->id)
                                    <dt class="col-3">Tahun Lulus Kuliah</dt>
                                    <dd class="col-9">: {{ $bukualumni->tahun_lulus }}</dd>
                                @endif
                            @endforeach
                            <dt class="col-3">Kegiatan Sekarang</dt>
                            <dd class="col-9">: {{ $alumni->kegiatan_sekarang }}</dd>
                        </dl>
                        <hr>
                        <dl>
                            @if ($alumni->jenis_pekerjaan == 1)
                                <dt>Jenis Pekerjaan</dt>
                                <dd>{{ $alumni->jenis_pekerjaan_lainnya }}</dd>
                            @elseif($alumni->jenis_pekerjaan)
                                <dt>Jenis Pekerjaan</dt>
                                <dd>{{ $alumni->jenis_pekerjaan }}</dd>
                            @else
                                <dt>Jenis Pekerjaan</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumni->nama_perusahaan)
                                <dt>Nama Perusahaan Tempat Kerja</dt>
                                <dd>{{ $alumni->nama_perusahaan }}</dd>
                            @else
                                <dt>Nama Perusahaan Tempat Kerja</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumni->kategori_perusahaan == 1)
                                <dt>Kategori Perusahaan</dt>
                                <dd>{{ $alumni->kategori_perusahaan_lainnya }}</dd>
                            @elseif($alumni->kategori_perusahaan)
                                <dt>Kategori Perusahaan</dt>
                                <dd>{{ $alumni->kategori_perusahaan }}</dd>
                            @else
                                <dt>Kategori Perusahaan</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumni->jabatan)
                                <dt>Posisi/ Jabatan Saat Ini</dt>
                                <dd>{{ $alumni->jabatan }}</dd>
                            @else
                                <dt>Posisi/ Jabatan Saat Ini</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumni->waktu_tunggu_kerja)
                                <dt>
                                    Waktu Yang Diperlukan Untuk Memperoleh Pekerjaan Setelah Kelulusan</dt>
                                <dd>{{ $alumni->waktu_tunggu_kerja }}</dd>
                            @else
                                <dt>
                                    Waktu Yang Diperlukan Untuk Memperoleh Pekerjaan Setelah Kelulusan</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumni->kesesuaian_kompetensi)
                                <dt>Kesesuaian Kompetensi dengan Bidang Pekerjaan</dt>
                                <dd>{{ $alumni->kesesuaian_kompetensi }}</dd>
                            @else
                                <dt>Kesesuaian Kompetensi dengan Bidang Pekerjaan</dt>
                                <dd>-</dd>
                            @endif

                            @if ($alumni->gaji_pertama)
                                <dt>Gaji Pertama Saat Bekerja</dt>
                                <dd>{{ $alumni->gaji_pertama }}</dd>
                            @else
                                <dt>Gaji Pertama Saat Bekerja</dt>
                                <dd>-</dd>
                            @endif
                        </dl>
                        <hr>
                        <dl>
                            <dt>Saran dan Masukan Alumni Untuk POLITAP</dt>
                            <dd>{{ $alumni->saran_masukan }}</dd>
                            <dt>Kesan Alumni Berkuliah di POLITAP</dt>
                            <dd>{{ $alumni->kesan }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.alumni>
