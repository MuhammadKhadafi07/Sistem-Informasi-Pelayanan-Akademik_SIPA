<x-module.koor.jurusan>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengumpulan Berkas</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="160px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_pengumpulanberkas as $pengumpulanberkas)
                        @if ($pengumpulanberkas->status_jurusan == 1)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('koor/jurusan/pengumpulanberkas', $pengumpulanberkas->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        <form
                                            action="{{ url('koor/jurusan/pengumpulanberkas/konfirmasi', $pengumpulanberkas->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Yakin ingin mengonfirmasi pengajuan ini?')">
                                            @csrf
                                            @method('put')
                                            <button class="btn btn-success btn-sm"><i class="fas fa-user-check"></i>
                                                Konfirmasi</button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $pengumpulanberkas->tanggal_pengajuan_string }}</td>
                                <td>{{ $pengumpulanberkas->mahasiswa->nama }}</td>
                                <td>{{ $pengumpulanberkas->mahasiswa->program_studi }}</td>
                                <td>{{ $pengumpulanberkas->mahasiswa->angkatan }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.koor.jurusan>
