<x-module.pkkmb.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Absen PKKMB</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="115px">Aksi</th>
                    <th>Program Studi</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Kegiatan</th>
                    <th>Kelompok</th>
                </thead>
                <tbody>
                    @foreach ($list_absen as $absen)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('pkkmb/admin/absen', $absen->id) }}" class="btn btn-dark btn-sm"><i
                                            class="fas fa-info"></i> Detail</a>
                                    <form action="{{ url('pkkmb/admin/absen', $absen->id) }}" method="post"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                            Hapus</button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $absen->program_studi }}</td>
                            <td>{{ $absen->tanggal_kegiatan_string }}</td>
                            <td>{{ $absen->materi_kegiatan }}</td>
                            <td>{{ $absen->nama_kelompok }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pkkmb.admin>
