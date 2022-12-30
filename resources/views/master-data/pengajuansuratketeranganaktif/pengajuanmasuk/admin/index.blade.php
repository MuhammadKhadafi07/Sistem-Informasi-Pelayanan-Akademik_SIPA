<x-module.pengajuansuratketeranganaktif.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengajuan Masuk</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="180px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
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
                                        <a href="{{ url('pengajuansuratketeranganaktif/admin/pengajuanmasuk', $pengajuansuratketeranganaktif->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        <form
                                            action="{{ url('pengajuansuratketeranganaktif/admin/pengajuanmasuk/setuju', $pengajuansuratketeranganaktif->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Yakin ingin menyetujui pengajuan ini?')">
                                            @csrf
                                            @method('put')
                                            <button class="btn btn-primary btn-sm"><i class="fas fa-check"></i>
                                                Setuju</button>
                                        </form>
                                        <a href="{{ url('pengajuansuratketeranganaktif/admin/pengajuanmasuk', $pengajuansuratketeranganaktif->id) }}/tolak"
                                            class="btn btn-warning btn-sm"><i class="fas fa-times"></i> Tolak</a>
                                        {{-- Revisi Bulan 29 Desember 2022 --}}
                                        <form action="{{ url('pengajuansuratketeranganaktif/admin/pengajuanmasuk', $pengajuansuratketeranganaktif->id) }}" method="post"
                                            onsubmit="return confirm('Yakin ingin menghapus pengajuan ini?')">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
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
</x-module.pengajuansuratketeranganaktif.admin>
