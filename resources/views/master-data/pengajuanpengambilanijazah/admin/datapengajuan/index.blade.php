<x-module.pengajuanpengambilanijazah.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengajuan Pengambilan Ijazah</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="120px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th width="50px">Perpustakaan</th>
                    <th width="50px">Jurusan</th>
                    <th width="50px">Alumni</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_pengajuanpengambilanijazah->sortByDesc('created_at')->values() as $pengajuanpengambilanijazah)
                        @if ($pengajuanpengambilanijazah->status_pengajuan == 1)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('pengajuanpengambilanijazah/admin/datapengajuan', $pengajuanpengambilanijazah->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        <form
                                            action="{{ url('pengajuanpengambilanijazah/admin/datapengajuan/clear', $pengajuanpengambilanijazah->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Yakin ingin clear pengajuan ini?')">
                                            @csrf
                                            @method('put')
                                            <button class="btn btn-success btn-sm"><i class="fas fa-user-check"></i>
                                                Clear</button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $pengajuanpengambilanijazah->tanggal_pengajuan_string }}</td>
                                <td>{{ $pengajuanpengambilanijazah->nama }}</td>
                                <td>{{ $pengajuanpengambilanijazah->mahasiswa->program_studi }}</td>
                                <td>{{ $pengajuanpengambilanijazah->mahasiswa->angkatan }}</td>
                                <td>
                                    @if ($pengajuanpengambilanijazah->status_perpustakaan == 1)
                                        <label for="" class="btn btn-danger btn-sm"><i
                                                class="fas fa-times-circle"></i></label>
                                    @else
                                        <label for="" class="btn btn-success btn-sm"><i
                                                class="fas fa-check"></i></label>
                                    @endif
                                </td>
                                <td>
                                    @if ($pengajuanpengambilanijazah->status_jurusan == 1)
                                        <label for="" class="btn btn-danger btn-sm"><i
                                                class="fas fa-times-circle"></i></label>
                                    @else
                                        <label for="" class="btn btn-success btn-sm"><i
                                                class="fas fa-check"></i></label>
                                    @endif
                                </td>
                                <td>
                                    @if ($pengajuanpengambilanijazah->alumni)
                                        <label for="" class="btn btn-success btn-sm"><i
                                                class="fas fa-check"></i></label>
                                    @else
                                        <label for="" class="btn btn-danger btn-sm"><i
                                                class="fas fa-times-circle"></i></label>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pengajuanpengambilanijazah.admin>
