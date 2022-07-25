<x-module.alumni.admin>
    <div class="card">
        <div class="card-header">
            <a href="{{ url('alumni/admin/bukualumni/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Buku</a>
            <div class="card-title">Data Buku Alumni</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="45px">Aksi</th>
                    <th>Program Studi</th>
                    <th>Tahun Lulus Kuliah</th>
                    <th width="10px">Alumni</th>
                </thead>
                <tbody>
                    @foreach ($list_bukualumni->sortByDesc('created_at')->values() as $bukualumnus)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="alumni/admin/bukualumni"
                                        id="{{ $bukualumnus->id }}" />
                                    <x-template.button.edit-button url="alumni/admin/bukualumni"
                                        id="{{ $bukualumnus->id }}" />
                                    <x-template.button.delete-button url="alumni/admin/bukualumni"
                                        id="{{ $bukualumnus->id }}" />
                                </div>
                            </td>
                            <td>{{ $bukualumnus->program_studi }}</td>
                            <td>{{ $bukualumnus->tahun_lulus }}</td>
                            <td>{{ $bukualumnus->alumni_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.alumni.admin>
