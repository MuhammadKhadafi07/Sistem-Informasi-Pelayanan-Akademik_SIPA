<x-module.pengajuansuratketeranganaktif.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengajuan Disetujui</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="300px">Aksi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_pengajuandisetujui->sortByDesc('created_at')->values() as $pengajuansuratketeranganaktif)
                        @if ($pengajuansuratketeranganaktif->status == 2)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('pengajuansuratketeranganaktif/admin/pengajuandisetujui', $pengajuansuratketeranganaktif->id) }}"
                                            class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                        @if ($pengajuansuratketeranganaktif->surat_keteranganaktif)
                                            <a href="{{ url('pengajuansuratketeranganaktif/admin/pengajuandisetujui', $pengajuansuratketeranganaktif->id) }}/kirim"
                                                class="btn btn-primary btn-sm"><i class="fas fa-upload"></i> Upload
                                                Surat
                                                Ulang</a>
                                            <a href="" target="popup"
                                                onclick="window.open('{{ url("public/$pengajuansuratketeranganaktif->surat_keteranganaktif") }}','popup','width=800,height=600'); return false;"
                                                class="btn btn-secondary float-right btn-sm"><i
                                                    class="fas fa-download"></i>
                                                Lihat Surat</a>
                                        @else
                                            <a href="{{ url('pengajuansuratketeranganaktif/admin/pengajuandisetujui', $pengajuansuratketeranganaktif->id) }}/kirim"
                                                class="btn btn-primary btn-sm"><i class="fas fa-upload"></i> Upload
                                                Surat</a>
                                            <form
                                                action="{{ url('pengajuansuratketeranganaktif/admin/pengajuandisetujui/diproses', $pengajuansuratketeranganaktif->id) }}"
                                                method="post"
                                                onsubmit="return confirm('Yakin ingin membatalkan pengajuan ini dari pengajuan disetujui?')">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-warning btn-sm"><i class="fas fa-redo"></i>
                                                    Batal</button>
                                            </form>
                                        @endif
                                        {{-- Revisi Bulan 29 Desember 2022 --}}
                                        <form action="{{ url('pengajuansuratketeranganaktif/admin/pengajuandisetujui', $pengajuansuratketeranganaktif->id) }}" method="post"
                                            onsubmit="return confirm('Yakin ingin menghapus pengajuan ini?')">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $pengajuansuratketeranganaktif->tanggal_pengajuan_string }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->nim }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->nama }}</td>
                                <td>{{ $pengajuansuratketeranganaktif->mahasiswa->program_studi }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pengajuansuratketeranganaktif.admin>
