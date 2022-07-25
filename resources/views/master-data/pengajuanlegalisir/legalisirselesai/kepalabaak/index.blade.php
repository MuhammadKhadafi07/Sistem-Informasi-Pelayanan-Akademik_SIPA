<x-module.pengajuanlegalisir.kepalabaak>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Legalisir Selesai</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="50px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
                    <th width="40px">NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th width="20px">Angkatan</th>
                    <th>Jadwal Pengambilan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_legalisirselesai->sortByDesc('created_at')->values() as $pengajuanlegalisir)
                        @if ($pengajuanlegalisir->status == 2)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('pengajuanlegalisir/kepalabaak/legalisirselesai', $pengajuanlegalisir->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                    </div>
                                </td>
                                <td>{{ $pengajuanlegalisir->tanggal_pengajuan_string }}</td>
                                <td>{{ $pengajuanlegalisir->mahasiswa->nim }}</td>
                                <td>{{ $pengajuanlegalisir->mahasiswa->nama }}</td>
                                <td>{{ $pengajuanlegalisir->mahasiswa->program_studi }}</td>
                                <td>{{ $pengajuanlegalisir->mahasiswa->angkatan }}</td>
                                <td>{{ $pengajuanlegalisir->tanggal_diambil_string }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pengajuanlegalisir.kepalabaak>
