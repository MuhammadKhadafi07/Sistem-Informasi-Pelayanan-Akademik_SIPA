<x-module.koor.jurusan>
    <x-template.button.back-button url="koor/jurusan/riwayatpengumpulanberkas" />
    <div class="card">
        <div class="card-header">
            <form action="{{ url('koor/jurusan/riwayatpengumpulanberkas/cancel', $pengumpulanberkas->id) }}"
                method="post" onsubmit="return confirm('Yakin ingin membatalkan pengajuan ini?')">
                @csrf
                @method('put')
                <button class="btn btn-warning btn-sm float-right"><i class="fas fa-eject"></i>
                    Cancel</button>
            </form>
            <div class="card-title">Detail Pengumpulan Berkas</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <dl class="row">
                        <dt class="col-md-2">Nama Lengkap</dt>
                        <dd class="col-md-10">: {{ $pengumpulanberkas->mahasiswa->nama }}</dd>
                        <dt class="col-md-2">NIM</dt>
                        <dd class="col-md-10">: {{ $pengumpulanberkas->mahasiswa->nim }}</dd>
                        <dt class="col-md-2">Program Studi</dt>
                        <dd class="col-md-10">: {{ $pengumpulanberkas->mahasiswa->program_studi }}</dd>
                        <dt class="col-md-2">Jenis Kelamin</dt>
                        <dd class="col-md-10">: {{ $pengumpulanberkas->mahasiswa->jenis_kelamin }}</dd>
                        <dt class="col-md-2">Angkatan</dt>
                        <dd class="col-md-10">: {{ $pengumpulanberkas->mahasiswa->angkatan }}</dd>
                        <dt class="col-md-2">No. Handphone</dt>
                        <dd class="col-md-10">: {{ $pengumpulanberkas->no_hp }}</dd>
                        <dt class="col-md-2">Tanggal Pengajuan</dt>
                        <dd class="col-md-10">: {{ $pengumpulanberkas->tanggal_pengajuan_string }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.koor.jurusan>
