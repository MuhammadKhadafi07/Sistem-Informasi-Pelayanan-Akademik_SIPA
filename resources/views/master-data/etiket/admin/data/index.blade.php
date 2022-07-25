<x-module.etiket.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Etiket Masuk</div>
        </div>
        <div class="card-body">
            <table class="table table-datatable table-bordered table-striped">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="190px">Aksi</th>
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
                    @foreach ($list_etiket->sortByDesc('created_at')->values() as $etiket)
                        @if ($etiket->status == 1)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('etiket/admin/etiket', $etiket->id) }}"
                                            class="btn btn-sm btn-dark"><i class="fas fa-info"></i> Detail</a>
                                        <a href="{{ url('etiket/admin/etiket/selesai', $etiket->id) }}"
                                            class="btn btn-sm btn-success"><i class="fas fa-check"></i> Selesai</a>
                                        <a href="{{ url('etiket/admin/etiket/tolak', $etiket->id) }}"
                                            class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Tolak</a>
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
