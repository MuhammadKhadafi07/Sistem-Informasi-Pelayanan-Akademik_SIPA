<x-module.etiket.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Etiket Selesai</div>
        </div>
        <div class="card-body">
            <table class="table table-datatable table-bordered table-striped">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="110px">Aksi</th>
                    <th width="140px">Tanggal Pengajuan</th>
                    <th width="130px">Status Pengguna</th>
                    <th width="50px">NIM</th>
                    <th width="170px">Nama</th>
                    <th>Kategori Masalah</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_selesai->sortByDesc('created_at')->values() as $etiket)
                        @if ($etiket->status == 2)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('etiket/admin/selesai', $etiket->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        <form action="{{ url('etiket/admin/selesai/proses', $etiket->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Yakin ingin membatalkan etiket ini dari etiket selesai?')">
                                            @csrf
                                            @method('put')
                                            <button class="btn btn-warning btn-sm"><i class="fas fa-redo"></i>
                                                Batal</button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $etiket->tanggal_string }}</td>
                                <td>{{ $etiket->mahasiswa->is_alumni_string }}</td>
                                <td>{{ $etiket->mahasiswa->nim }}</td>
                                <td>{{ $etiket->mahasiswa->nama }}</td>
                                <td>{{ $etiket->masalah }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.etiket.admin>
