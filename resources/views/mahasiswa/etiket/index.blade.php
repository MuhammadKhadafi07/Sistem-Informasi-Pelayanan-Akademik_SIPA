<x-module.mahasiswa>
    <div class="card">
        <div class="card-header">
            <a href="{{ url('mahasiswa/etiket/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i></a>
            <div class="card-title">Data Etiket</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="50px">Aksi</th>
                    <th width="140px">Tanggal Pengajuan</th>
                    <th width="60px">Tingkat</th>
                    <th width="160px">Kategori Masalah</th>
                    <th>Keterangan Pengajuan</th>
                    <th width="130px">Status Pengajuan</th>
                </thead>
                <tbody>
                    @foreach ($list_etiket->sortByDesc('created_at')->values() as $etiket)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('mahasiswa/etiket', $etiket->id) }}"
                                        class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                </div>
                            </td>
                            <td>{{ $etiket->tanggal_string }}</td>
                            <td>{{ $etiket->tingkat_masalah }}</td>
                            <td>{{ $etiket->masalah }}</td>
                            <td>
                                @if ($etiket->status == 1)
                                    Sedang diproses
                                @elseif($etiket->pesan_admin)
                                    {{ $etiket->pesan_admin }}
                                @endif
                            </td>
                            <td>
                                @if ($etiket->status == 1)
                                    <label for="" class="btn btn-warning btn-sm">Diproses</label>
                                @elseif($etiket->status == 2)
                                    <label for="" class="btn btn-success btn-sm">Selesai</label>
                                @elseif($etiket->status == 3)
                                    <label for="" class="btn btn-danger btn-sm">Ditolak</label>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.mahasiswa>
