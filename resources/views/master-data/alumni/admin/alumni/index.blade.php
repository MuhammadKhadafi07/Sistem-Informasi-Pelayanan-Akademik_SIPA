<x-module.alumni.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Alumni</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="90px">Aksi</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi - Tahun Lulus Kuliah</th>
                    <th>Angkatan</th>
                </thead>
                <tbody>
                    @foreach ($list_alumni->sortByDesc('created_at')->values() as $alumnus)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="alumni/admin/alumni" id="{{ $alumnus->id }}" />
                                    <x-template.button.edit-button url="alumni/admin/alumni"
                                        id="{{ $alumnus->id }}" />
                                    <x-template.button.delete-button url="alumni/admin/alumni"
                                        id="{{ $alumnus->id }}" />
                                </div>
                            </td>
                            <td>{{ $alumnus->mahasiswa->nim }}</td>
                            <td>{{ $alumnus->mahasiswa->nama }}</td>
                            <td>{{ $alumnus->mahasiswa->jenis_kelamin }}</td>
                            <td>
                                @foreach ($list_bukualumni as $bukualumni)
                                    @if (old('id_bukualumni', $alumnus->id_bukualumni) == $bukualumni->id)
                                        {{ $bukualumni->program_studi }} - {{ $bukualumni->tahun_lulus }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $alumnus->mahasiswa->angkatan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.alumni.admin>
