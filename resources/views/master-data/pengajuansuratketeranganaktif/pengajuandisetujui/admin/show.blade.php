<x-module.pengajuansuratketeranganaktif.admin>
    <x-template.button.back-button url="pengajuansuratketeranganaktif/admin/pengajuandisetujui" />
    <div class="card">
        <div class="card-header">
            @if ($pengajuansuratketeranganaktif->surat_keteranganaktif)
                <a href="" target="popup"
                    onclick="window.open('{{ url($pengajuansuratketeranganaktif->surat_keteranganaktif) }}','popup','width=800,height=600'); return false;"
                    class="btn btn-secondary float-right btn-sm"><i class="fas fa-download"></i> Lihat Surat</a>
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="fas fa-upload"></i> Upload
                    Surat Ulang</button>
            @else
                <form
                    action="{{ url('pengajuansuratketeranganaktif/admin/pengajuandisetujui/diproses', $pengajuansuratketeranganaktif->id) }}"
                    method="post"
                    onsubmit="return confirm('Yakin ingin membatalkan pengajuan ini dari pengajuan disetujui?')">
                    @csrf
                    @method('put')
                    <button class="btn btn-warning btn-sm float-right"><i class="fas fa-redo"></i>
                        Batal</button>
                </form>
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="fas fa-upload"></i> Upload
                    Surat</button>
            @endif
            <div class="card-title">Detail Pengajuan Surat Keterangan Aktif</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama Lengkap</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->nama }}</dd>
                        <dt>NIM</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->nim }}</dd>
                        <dt>Program Studi</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->program_studi }}</dd>
                        <dt>Tahun Masuk</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->angkatan }}</dd>
                        <dt>Jenis Kelamin</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->jenis_kelamin }}</dd>
                        <dt>Semester</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->semester }}</dd>
                        <dt>No. Handphone</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->no_telepon }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <dl>
                        <dt>Tempat Lahir</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->tempat_lahir }}</dd>
                        <dt>Tanggal Lahir</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->tanggal_lahir_string }}</dd>
                        <dt>Alamat Rumah Sekarang</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->alamat_rumahsekarang }}</dd>
                        <dt>Nama Orang Tua</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->nama_orangtua }}</dd>
                        <dt>Tempat Kerja Orang Tua</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->tempat_kerja_orangtua }}</dd>
                        <dt>Alamat Tinggal Orang Tua</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->alamat_tinggal_orangtua }}</dd>
                        <dt>Tanggal Pengajuan</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->tanggal_pengajuan_string }}</dd>
                    </dl>
                </div>
                <div class="col-md-12">
                    <dl>
                        <dt>Keperluan</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->keperluan }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.pengajuansuratketeranganaktif.admin>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h6 class="modal-title" id="exampleModalLongTitle">Form Upload Surat</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="{{ url('pengajuansuratketeranganaktif/admin/pengajuandisetujui/kirimsurat', $pengajuansuratketeranganaktif->id) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">Upload File</label>
                        <input type="file" accept=".pdf" class="form-control" name="surat_keteranganaktif" required>
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="fas fa-arrow-left"></i> Kembali</button>
                        <button class="btn btn-dark"><i class="far fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
