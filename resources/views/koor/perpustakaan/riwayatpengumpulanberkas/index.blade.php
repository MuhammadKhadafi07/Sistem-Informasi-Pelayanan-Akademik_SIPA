<x-module.koor.perpustakaan>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Riwayat Pengumpulan Berkas</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="120px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_riwayatpengumpulanberkas->sortByDesc('created_at')->values() as $pengumpulanberkas)
                        @if ($pengumpulanberkas->status_perpustakaan == 2)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('koor/perpustakaan/riwayatpengumpulanberkas', $pengumpulanberkas->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        <form
                                            action="{{ url('koor/perpustakaan/riwayatpengumpulanberkas/cancel', $pengumpulanberkas->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Yakin ingin membatalkan pengajuan ini?')">
                                            @csrf
                                            @method('put')
                                            <button class="btn btn-warning btn-sm"><i class="fas fa-eject"></i>
                                                Cancel</button>
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
</x-module.koor.perpustakaan>
