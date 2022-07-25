<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <table class="table table-datatable table-striped table-bordered">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="50px">Aksi</th>
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
                                    <a href="{{ url('admin/master-data/pegawai', $pegawai->id) }}"
                                        class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
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
</x-module.admin>
