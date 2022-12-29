<x-module.admin>
    <x-template.button.back-button url="admin/master-data/mahasiswa" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($mahasiswa->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/master-data/mahasiswa', $mahasiswa->id) }}/edit"
                        class="btn btn-warning btn-sm float-right"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">Detail Pengguna</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dt class="col-2">Nama Lengkap</dt>
                                <dd class="col-10">: {{ $mahasiswa->nama }}</dd>
                                <dt class="col-2">NIM</dt>
                                <dd class="col-10">: {{ $mahasiswa->nim }}</dd>
                                <dt class="col-2">Status</dt>
                                <dd class="col-10">: {{ $mahasiswa->is_alumni_string }}</dd>
                                <dt class="col-2">Program Studi</dt>
                                <dd class="col-10">: {{ $mahasiswa->program_studi }}</dd>
                                <dt class="col-2">Jenis Kelamin</dt>
                                <dd class="col-10">: {{ $mahasiswa->jenis_kelamin }}</dd>
                                <dt class="col-2">Agama</dt>
                                <dd class="col-10">: {{ $mahasiswa->agama }}</dd>
                                <dt class="col-2">Tempat Lahir</dt>
                                <dd class="col-10">: {{ $mahasiswa->tempat_lahir }}</dd>
                                <dt class="col-2">Tanggal Lahir</dt>
                                <dd class="col-10">: {{ $mahasiswa->tanggal_lahir_string }}</dd>
                                <dt class="col-2">Tahun Masuk</dt>
                                {{-- Permintaan dari client, judul angkatan diubah ke tahun masuk --}}
                                <dd class="col-10">: {{ $mahasiswa->angkatan }}</dd>
                                <dt class="col-2">No. Handphone</dt>
                                <dd class="col-10">: {{ $mahasiswa->no_telepon }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
