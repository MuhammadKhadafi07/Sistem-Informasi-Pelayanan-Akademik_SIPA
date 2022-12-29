<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pengguna
            </div>
            <a href="{{ url('admin/master-data/mahasiswa/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="90px">Aksi</th>
                    <th>Status</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th width="100px">Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Tahun Masuk</th>
                    {{-- Permintaan dari client, judul angkatan diubah ke tahun masuk --}}
                </thead>
                <tbody>
                    @foreach ($list_mahasiswa->sortByDesc('created_at')->values() as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/master-data/mahasiswa"
                                        id="{{ $mahasiswa->id }}" />
                                    <x-template.button.edit-button url="admin/master-data/mahasiswa"
                                        id="{{ $mahasiswa->id }}" />
                                    <x-template.button.delete-button url="admin/master-data/mahasiswa"
                                        id="{{ $mahasiswa->id }}" />
                                </div>
                            </td>
                            <td>{{ $mahasiswa->is_alumni_string }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->jenis_kelamin }}</td>
                            <td>{{ $mahasiswa->program_studi }}</td>
                            <td>{{ $mahasiswa->angkatan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
