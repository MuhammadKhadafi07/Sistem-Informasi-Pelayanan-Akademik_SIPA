<x-module.alumni.kepalabaak>
    <div class="card">
        <div class="card-header">
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
                                    <a href="{{ url('alumni/kepalabaak/bukualumni', $bukualumnus->id) }}"
                                        class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
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
</x-module.alumni.kepalabaak>
