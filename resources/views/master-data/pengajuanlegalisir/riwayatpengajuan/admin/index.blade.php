<x-module.pengajuanlegalisir.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Riwayat Legalisir</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="110px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
                    <th width="40px">NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th width="20px">Tahun Masuk</th>
                    <th>Jadwal Pengambilan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_riwayatpengajuan->sortByDesc('created_at')->values() as $pengajuanlegalisir)
                        @if ($pengajuanlegalisir->status == 3)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('pengajuanlegalisir/admin/riwayatpengajuan', $pengajuanlegalisir->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        <form
                                            action="{{ url('pengajuanlegalisir/admin/riwayatpengajuan/proses', $pengajuanlegalisir->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Yakin ingin membatalkan pengajuan ini dari riwayat?')">
                                            @csrf
                                            @method('put')
                                            <button class="btn btn-warning btn-sm"><i class="fas fa-redo"></i>
                                                Batal</button>
                                        </form>
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
</x-module.pengajuanlegalisir.admin>
