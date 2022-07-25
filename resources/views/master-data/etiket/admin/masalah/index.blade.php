<x-module.etiket.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Kategori Masalah</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('etiket/admin/masalah') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Kategori Masalah</label>
                                <input type="text" name="masalah" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Kategori Masalah</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-datatable">
                        <thead class="bg-dark">
                            <th width="10px">No</th>
                            <th width="60px">Aksi</th>
                            <th>Kategori Masalah</th>
                        </thead>
                        <tbody>
                            @foreach ($list_masalah->sortByDesc('created_at')->values() as $masalah)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <form action="{{ url('etiket/admin/masalah', $masalah->id) }}" method="post"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                                Hapus</button>
                                        </form>
                                    </td>
                                    <td>{{ $masalah->masalah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-module.etiket.admin>
