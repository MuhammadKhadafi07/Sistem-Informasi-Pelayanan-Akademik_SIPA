<x-module.superadmin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
            <a href="{{ url('superadmin/master-data/pegawai/create') }}" class="float-right btn btn-dark"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-datatable table-striped table-bordered">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="90px">Aksi</th>
                    <th>Status</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($list_pegawai->sortByDesc('created_at')->values() as $pegawai)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="superadmin/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                    <x-template.button.edit-button url="superadmin/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                    <x-template.button.delete-button url="superadmin/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                </div>
                            </td>
                            <td>{{ $pegawai->status_pegawai }}</td>
                            <td>{{ $pegawai->nama }}</td>
                            <td>{{ $pegawai->jenis_kelamin }}</td>
                            <td>{{ $pegawai->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.superadmin>
