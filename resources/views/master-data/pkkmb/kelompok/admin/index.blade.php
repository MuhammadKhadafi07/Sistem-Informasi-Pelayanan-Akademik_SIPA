<x-module.pkkmb.admin>
    <x-template.button.back-button url="pkkmb/admin/kelompok" />
    <div class="card">
        <div class="card-header">
            <a href="{{ url('pkkmb/admin/kelompok/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Kelompok</a>
            <div class="card-title">Kelompok PKKMB</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Angkatan</th>
                    <th>Program Studi</th>
                    <th>Kelompok</th>
                </thead>
                <tbody>
                    @foreach ($list_kelompok as $kelompok)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="pkkmb/admin/kelompok"
                                        id="{{ $kelompok->id }}" />
                                    <x-template.button.edit-button url="pkkmb/admin/kelompok"
                                        id="{{ $kelompok->id }}" />
                                    <x-template.button.delete-button url="pkkmb/admin/kelompok"
                                        id="{{ $kelompok->id }}" />
                                </div>
                            </td>
                            <td>{{ $kelompok->angkatan }}</td>
                            <td>{{ $kelompok->program_studi }}</td>
                            <td>{{ $kelompok->kelompok }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pkkmb.admin>
