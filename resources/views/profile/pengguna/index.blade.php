<x-module.profile.pengguna>
    <button onclick="goBack()" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i>
        Kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($pengguna->foto) }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('profile/pengguna', $pengguna->id) }}/edit"
                        class="btn btn-dark btn-sm float-right"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">Detail Pengguna</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dt class="col-2">Nama Lengkap</dt>
                                <dd class="col-10">: {{ $pengguna->nama }}</dd>
                                <dt class="col-2">NIM</dt>
                                <dd class="col-10">: {{ $pengguna->nim }}</dd>
                                <dt class="col-2">Status</dt>
                                <dd class="col-10">: {{ $pengguna->is_alumni_string }}</dd>
                                <dt class="col-2">Program Studi</dt>
                                <dd class="col-10">: {{ $pengguna->program_studi }}</dd>
                                <dt class="col-2">Jenis Kelamin</dt>
                                <dd class="col-10">: {{ $pengguna->jenis_kelamin }}</dd>
                                <dt class="col-2">Agama</dt>
                                <dd class="col-10">: {{ $pengguna->agama }}</dd>
                                <dt class="col-2">Tempat Lahir</dt>
                                <dd class="col-10">: {{ $pengguna->tempat_lahir }}</dd>
                                <dt class="col-2">Tanggal Lahir</dt>
                                <dd class="col-10">: {{ $pengguna->tanggal_lahir_string }}</dd>
                                <dt class="col-2">Tahun Masuk</dt>
                                {{-- Permintaan dari client, judul angkatan diubah ke tahun masuk --}}
                                <dd class="col-10">: {{ $pengguna->angkatan }}</dd>
                                <dt class="col-2">No. Handphone</dt>
                                <dd class="col-10">: {{ $pengguna->no_telepon }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.profile.pengguna>
