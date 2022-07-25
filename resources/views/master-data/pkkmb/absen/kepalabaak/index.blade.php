<x-module.pkkmb.kepalabaak>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Absen PKKMB</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="45px">Aksi</th>
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
                                    <a href="{{ url('pkkmb/kepalabaak/absen', $absen->id) }}"
                                        class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
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
</x-module.pkkmb.kepalabaak>
