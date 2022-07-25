<x-module.mahasiswa>
    <div class="card">
        <div class="card-header">
            <div class="card-title">PKKMB</div>
        </div>
        <div class="card-body">
            <h3>Daftar PKKMB di akun masing-masing.</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{ url('mahasiswa/pkkmb/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Daftar PKKMB</a>
            <div class="card-title">Data PKKMB</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead>
                    <th width="10px">No</th>
                    <th width="105px">Aksi</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th>Tahun Daftar PKKMB</th>
                </thead>
                <tbody>
                    @foreach ($list_pkkmb as $pkkmb)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('mahasiswa/pkkmb', $pkkmb->id) }}" class="btn btn-dark btn-sm"><i
                                            class="fas fa-info"></i> Detail</a>
                                    <a href="{{ url('mahasiswa/pkkmb', $pkkmb->id) }}/edit"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                </div>
                            </td>
                            <td>{{ $pkkmb->nim }}</td>
                            <td>{{ $pkkmb->nama }}</td>
                            <td>{{ $pkkmb->program_studi }}</td>
                            <td>{{ $pkkmb->angkatan }}</td>
                            <td>{{ $pkkmb->created_at->year }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.mahasiswa>
