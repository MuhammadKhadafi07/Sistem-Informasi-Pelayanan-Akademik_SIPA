<x-module.pengajuansuratketeranganaktif.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengajuan Ditolak</div>
        </div>
        <div class="card-body">
            @php
                $no = 1;
            @endphp
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="120px">Aksi</th>
                    <th width="140px">Tanggal Pengajuan</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Keterangan Ditolak</th>
                </thead>
                <tbody>
                    @foreach ($list_pengajuanditolak->sortByDesc('created_at')->values() as $pengajuansuratketeranganaktif)
                        @if ($pengajuansuratketeranganaktif->status == 3)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('pengajuansuratketeranganaktif/admin/pengajuanditolak', $pengajuansuratketeranganaktif->id) }}"
                                            class="btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        <form
                                            action="{{ url('pengajuansuratketeranganaktif/admin/pengajuanditolak/diproses', $pengajuansuratketeranganaktif->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Yakin ingin membatalkan pengajuan ini dari pengajuan ditolak?')">
                                            @csrf
                                            @method('put')
                                            <button class="btn btn-warning btn-sm"><i class="fas fa-redo"></i>
                                                Batal</button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $pengajuansuratketeranganaktif->tanggal_pengajuan_string }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->nim }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->nama }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->program_studi }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->pesan_admin }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pengajuansuratketeranganaktif.admin>
