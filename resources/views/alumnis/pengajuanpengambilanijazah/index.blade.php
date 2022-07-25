<x-module.alumni>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('alumni/pengajuanpengambilanijazah/create') }}" class="btn btn-dark float-right"><i
                        class="fas fa-plus"></i> Tambah Pengajuan</a>
                <div class="card-title">Data Pengajuan Pengambilan Ijazah</div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-datatable">
                    <thead class="bg-dark">
                        <th width="10px">No</th>
                        <th width="50px">Aksi</th>
                        <th>Tanggal Pengajuan</th>
                        <th width="50px">Perpustakaan</th>
                        <th width="50px">Jurusan</th>
                        <th width="50px">Alumni</th>
                    </thead>
                    <tbody>
                        @foreach ($list_pengajuanpengambilanijazah as $pengajuanpengambilanijazah)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ url('alumni/pengajuanpengambilanijazah', $pengajuanpengambilanijazah->id) }}"
                                        class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                </td>
                                <td>{{ $pengajuanpengambilanijazah->tanggal_pengajuan_string }}</td>
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.alumni>
