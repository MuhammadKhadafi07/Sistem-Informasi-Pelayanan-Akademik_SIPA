<x-module.pkkmb.kepalabaak>
    <x-template.button.refresh-button url="pkkmb/kepalabaak/pkkmb" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Filter</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pkkmb/admin/pkkmb/filter') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi</label>
                            <select name="program_studi" aria-label="default select example"
                                value="{{ $program_studi ?? '' }}" class="form-control">
                                <option selected>Pilih opsi</option>
                                <option value="Pemeliharaan Mesin">Pemeliharaan Mesin</option>
                                <option value="Teknologi Pertambangan">Teknologi Pertambangan</option>
                                <option value="Teknologi Hasil Perkebunan">Teknologi Hasil Perkebunan</option>
                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                                <option value="Agroindustri">Agroindustri</option>
                                <option value="Teknologi Listrik">Teknologi Listrik</option>
                                <option value="Teknologi Rekayasa Konstruksi Jalan dan Jembatan">Teknologi Rekayasa
                                    Konstruksi Jalan dan Jembatan</option>
                                <option value="Teknologi Produksi Tanaman Perkebunan">Teknologi Produksi Tanaman
                                    Perkebunan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="fas fa-search"></i> Filter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data PKKMB</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="20px">No</th>
                    <th width="45px">Aksi</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th>Tahun Daftar PKKMB</th>
                </thead>
                <tbody>
                    @foreach ($list_pkkmb as $pkkmb)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('pkkmb/kepalabaak/pkkmb', $pkkmb->id) }}"
                                        class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                </div>
                            </td>
                            <td>{{ $pkkmb->nim }}</td>
                            <td>{{ $pkkmb->nama }}</td>
                            <td>{{ $pkkmb->jenis_kelamin }}</td>
                            <td>{{ $pkkmb->program_studi }}</td>
                            <td>{{ $pkkmb->angkatan }}</td>
                            <td>{{ $pkkmb->created_at->year }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pkkmb.kepalabaak>
