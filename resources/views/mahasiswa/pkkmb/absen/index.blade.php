<x-module.mahasiswa>
    <div class="card">
        <div class="card-header">
            {{-- <button class="btn btn-dark float-right btn-sm dropdown-toggle" type="button" aria-expanded="false" id="menu"
                data-toggle="dropdown"><i class="fas fa-bars"></i> Menu</button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menu">
                <a href="#" class="dropdown-item"><i class="far fa-calendar-alt"></i> Tambah Absen</a>
            </div> --}}
            <a href="{{ url('mahasiswa/absen/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i>
                Tambah Kegiatan</a>
            <div class="card-title">Data Absen PKKMB</div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-datatable">
                <thead>
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
                                    <a href="{{ url('mahasiswa/absen', $absen->id) }}" class="btn btn-dark btn-sm"><i
                                            class="fas fa-info"></i> Detail</a>
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
</x-module.mahasiswa>
