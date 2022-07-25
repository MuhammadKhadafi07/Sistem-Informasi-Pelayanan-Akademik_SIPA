<x-module.pengajuanlegalisir.admin>
    <x-template.button.back-button url="pengajuanlegalisir/admin/riwayatpengajuan" />
    <div class="card">
        <div class="card-header">
            <form action="{{ url('pengajuanlegalisir/admin/riwayatpengajuan/proses', $pengajuanlegalisir->id) }}"
                method="post" onsubmit="return confirm('Yakin ingin membatalkan pengajuan ini dari riwayat?')">
                @csrf
                @method('put')
                <button class="btn float-right btn-warning btn-sm"><i class="fas fa-redo"></i>
                    Batal</button>
            </form>
            <div class="card-title">Detail Pengajuan Legalisir</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <dl class="row">
                        <dt class="col-md-2">Nama Lengkap</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->mahasiswa->nama }}</dd>
                        <dt class="col-md-2">NIM</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->mahasiswa->nim }}</dd>
                        <dt class="col-md-2">Program Studi</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->mahasiswa->program_studi }}</dd>
                        <dt class="col-md-2">Angkatan</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->mahasiswa->angkatan }}</dd>
                        <dt class="col-md-2">Jenis Kelamin</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->mahasiswa->jenis_kelamin }}</dd>
                        <dt class="col-md-2">No. Handphone</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->no_hp }}</dd>
                        <dt class="col-md-2">Tanggal Pengajuan</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->tanggal_pengajuan_string }}</dd>
                    </dl>
                    <hr>
                    <dl class="row">
                        <dt class="col-md-2">Jadwal Pengambilan</dt>
                        <dd class="col-md-10">: {{ $pengajuanlegalisir->tanggal_diambil_string }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.pengajuanlegalisir.admin>
