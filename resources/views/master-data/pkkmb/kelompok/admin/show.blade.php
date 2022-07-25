<x-module.pkkmb.admin>
    <x-template.button.back-button url="pkkmb/admin/kelompok" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Kelompok</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Angkatan</dt>
                        <dd>{{ $kelompok->angkatan }}</dd>
                        <dt>Program Studi</dt>
                        <dd>{{ $kelompok->program_studi }}</dd>
                        <dt>Kelompok</dt>
                        <dd>{{ $kelompok->kelompok }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Mahasiswa</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('pkkmb/admin/kelompok') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Mahasiswa</label>
                            <select name="id_mahasiswa" class="form-control">
                                @foreach ($list_mahasiswa as $mahasiswa)
                                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nim }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-module.pkkmb.admin>
