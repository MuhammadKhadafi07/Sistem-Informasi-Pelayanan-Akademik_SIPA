<x-module.alumni.admin>
    <x-template.button.back-button url="alumni/admin/bukualumni" />
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Buku Alumni
        </h5>
    </div>
    @foreach ($bukualumnus->alumni->sortByDesc('created_at')->values() as $alumni)
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
                        <div class="card-title">Detail Buku Alumni</div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <dl class="row">
                                <dt class="col-md-3">Nama Lengkap</dt>
                                <dd class="col-md-9">: {{ $alumni->mahasiswa->nama }}</dd>
                                <dt class="col-md-3">NIM</dt>
                                <dd class="col-md-9">: {{ $alumni->mahasiswa->nim }}</dd>
                                <dt class="col-md-3">TTL</dt>
                                <dd class="col-md-9">: {{ $alumni->mahasiswa->tempat_lahir }},
                                    {{ $alumni->mahasiswa->tanggal_lahir_string }}</dd>
                                <dt class="col-md-3">Alamat</dt>
                                <dd class="col-md-9">: {{ $alumni->alamat }}</dd>
                                <dt class="col-md-3">Email</dt>
                                <dd class="col-md-9">: {{ $alumni->email }}</dd>
                                <dt class="col-md-3">Saran Untuk POLITAP</dt>
                                <dd class="col-md-9">: {{ $alumni->saran_masukan }}</dd>
                                <dt class="col-md-3">Kesan Berkuliah di POLITAP</dt>
                                <dd class="col-md-9">: {{ $alumni->kesan }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-module.alumni.admin>
