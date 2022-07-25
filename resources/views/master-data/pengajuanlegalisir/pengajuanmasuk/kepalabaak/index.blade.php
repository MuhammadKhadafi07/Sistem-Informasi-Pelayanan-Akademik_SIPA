<x-module.pengajuanlegalisir.kepalabaak>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tahap Pengajuan Legalisir</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h3>1. Silahkan datang ke BAAK membawa fotocopy untuk dilegalisir.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>2. Silahkan datang kembali ke BAAK untuk mengambil ijazah jika status di sistem telah "selesai"
                        sesuai jadwal pengambilan.
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengajuan Legalisir</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="50px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_pengajuanlegalisir->sortByDesc('created_at')->values() as $pengajuanlegalisir)
                        @if ($pengajuanlegalisir->status == 1)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('pengajuanlegalisir/kepalabaak/pengajuanlegalisir', $pengajuanlegalisir->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                    </div>
                                </td>
                                <td>{{ $pengajuanlegalisir->tanggal_pengajuan_string }}</td>
                                <td>{{ $pengajuanlegalisir->mahasiswa->nim }}</td>
                                <td>{{ $pengajuanlegalisir->mahasiswa->nama }}</td>
                                <td>{{ $pengajuanlegalisir->mahasiswa->program_studi }}</td>
                                <td>{{ $pengajuanlegalisir->mahasiswa->angkatan }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pengajuanlegalisir.kepalabaak>
