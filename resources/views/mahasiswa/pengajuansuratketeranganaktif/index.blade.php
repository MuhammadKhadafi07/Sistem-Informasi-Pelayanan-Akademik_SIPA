<x-module.mahasiswa>
    <div class="card">
        <div class="card-header">
            <a href="{{ url('mahasiswa/pengajuansuratketeranganaktif/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Pengajuan</a>
            <div class="card-title">Data Pengajuan Surat Keterangan Aktif</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="180px">Aksi</th>
                    <th width="140px">Tanggal Pengajuan</th>
                    <th>Keterangan Pengajuan</th>
                    <th width="130px">Status Pengajuan</th>
                </thead>
                <tbody>
                    @foreach ($list_pengajuansuratketeranganaktif->sortByDesc('created_at')->values() as $pengajuansuratketeranganaktif)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('mahasiswa/pengajuansuratketeranganaktif', $pengajuansuratketeranganaktif->id) }}"
                                        class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                    @if ($pengajuansuratketeranganaktif->surat_keteranganaktif)
                                        <a href="" target="popup"
                                            onclick="window.open('{{ url($pengajuansuratketeranganaktif->surat_keteranganaktif) }}','popup','width=800,height=600'); return false;"
                                            class="btn btn-primary btn-sm float-right"><i class="fas fa-download"></i>
                                            Download Surat</a>
                                    @endif
                                </div>
                            </td>
                            <td>{{ $pengajuansuratketeranganaktif->tanggal_pengajuan_string }}</td>
                            <td>
                                @if ($pengajuansuratketeranganaktif->pesan_admin)
                                    {{ $pengajuansuratketeranganaktif->pesan_admin }}
                                @elseif($pengajuansuratketeranganaktif->status == 1)
                                    <p>Pengajuan sedang diproses</p>
                                @elseif($pengajuansuratketeranganaktif->surat_keteranganaktif)
                                    <p>Pengajuan selesai</p>
                                @elseif($pengajuansuratketeranganaktif->status == 2)
                                    <p>Pengajuan disetujui</p>
                                @endif
                            </td>
                            <td>
                                @if ($pengajuansuratketeranganaktif->surat_keteranganaktif)
                                    <label for="" class="btn btn-success btn-sm">Selesai</label>
                                @elseif ($pengajuansuratketeranganaktif->status == 1)
                                    <label for="" class="btn btn-warning btn-sm">Diproses</label>
                                @elseif($pengajuansuratketeranganaktif->status == 2)
                                    <label for="" class="btn btn-primary btn-sm">Disetujui</label>
                                @elseif($pengajuansuratketeranganaktif->status == 3)
                                    <label for="" class="btn btn-danger btn-sm">Ditolak</label>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.mahasiswa>
