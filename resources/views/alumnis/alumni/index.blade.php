<x-module.alumni>
    <div class="card">
        <div class="card-header">
            <a href="{{ url('alumni/alumnis/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>
                Input Data Alumni</a>
            <div class="card-title">
                Data Alumni
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="110px">Aksi</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi - Tahun Lulus Kuliah</th>
                    <th>Angkatan</th>
                </thead>
                <tbody>
                    @foreach ($list_alumni as $alumni)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <div class="btn-group">
                                        <a href="{{ url('alumni/alumnis', $alumni->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        <a href="{{ url('alumni/alumnis', $alumni->id) }}/edit"
                                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $alumni->mahasiswa->nim }}</td>
                            <td>{{ $alumni->mahasiswa->nama }}</td>
                            <td>{{ $alumni->mahasiswa->jenis_kelamin }}</td>
                            <td>
                                @foreach ($list_bukualumni as $bukualumni)
                                    @if (old('id_bukualumni', $alumni->id_bukualumni) == $bukualumni->id)
                                        {{ $bukualumni->program_studi }} - {{ $bukualumni->tahun_lulus }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $alumni->mahasiswa->angkatan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.alumni>
