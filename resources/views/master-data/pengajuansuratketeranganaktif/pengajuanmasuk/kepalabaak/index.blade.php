<x-module.pengajuansuratketeranganaktif.kepalabaak>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengajuan Masuk</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="50px">Aksi</th>
                    <th width="140px">Tanggal Pengajuan</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_pengajuanmasuk->sortByDesc('created_at')->values() as $pengajuansuratketeranganaktif)
                        @if ($pengajuansuratketeranganaktif->status == 1)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('pengajuansuratketeranganaktif/kepalabaak/pengajuanmasuk', $pengajuansuratketeranganaktif->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                    </div>
                                </td>
                                <td>{{ $pengajuansuratketeranganaktif->tanggal_pengajuan_string }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->nim }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->nama }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->program_studi }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pengajuansuratketeranganaktif.kepalabaak>
