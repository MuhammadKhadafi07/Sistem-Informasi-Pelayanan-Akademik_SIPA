<x-module.alumni>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tahap Pengajuan Legalisir</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h3>1. Silahkan datang ke BAAK membawa fotocopy untuk dilegalisir.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>2. Silahkan datang kembali ke BAAK untuk mengambil ijazah jika status di sistem telah "selesai"
                        sesuai jadwal pengambilan.
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{ url('alumni/pengajuanlegalisir/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Pengajuan</a>
            <div class="card-title">Data Pengajuan Legalisir</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="50px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jadwal Pengambilan</th>
                    <th width="130px">Status Pengajuan</th>
                </thead>
                <tbody>
                    @foreach ($list_pengajuanlegalisir->sortByDesc('created_at')->values() as $pengajuanlegalisir)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('alumni/pengajuanlegalisir', $pengajuanlegalisir->id) }}"
                                        class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                </div>
                            </td>
                            <td>{{ $pengajuanlegalisir->tanggal_pengajuan_string }}</td>
                            <td>
                                @if ($pengajuanlegalisir->tanggal_diambil)
                                    {{ $pengajuanlegalisir->tanggal_diambil_string }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                @if ($pengajuanlegalisir->status == 1)
                                    <label for="" class="btn btn-warning btn-sm">Diproses</label>
                                @elseif($pengajuanlegalisir->status == 2)
                                    <label for="" class="btn btn-success btn-sm">Selesai</label>
                                @elseif($pengajuanlegalisir->status == 3)
                                    <label for="" class="btn btn-success btn-sm">Sudah diambil</label>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.alumni>
