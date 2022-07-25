<x-module.pkkmb.admin>
    <x-template.button.back-button url='pkkmb/admin/pkkmb' />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($pkkmb->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Detail PKKMB</div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <dl class="row">
                            <dt class="col-2">Nama</dt>
                            <dd class="col-10">{{ $pkkmb->nama }}</dd>
                            <dt class="col-2">NIM</dt>
                            <dd class="col-10">{{ $pkkmb->nim }}</dd>
                            <dt class="col-2">Agama</dt>
                            <dd class="col-10">{{ $pkkmb->agama }}</dd>
                            <dt class="col-2">Jenis Kelamin</dt>
                            <dd class="col-10">{{ $pkkmb->jenis_kelamin }}</dd>
                            <dt class="col-2">Program Studi</dt>
                            <dd class="col-10">{{ $pkkmb->program_studi }}</dd>
                            <dt class="col-2">Angkatan</dt>
                            <dd class="col-10">{{ $pkkmb->angkatan }}</dd>
                            <dt class="col-2">No Telepon</dt>
                            <dd class="col-10">{{ $pkkmb->no_telepon }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.pkkmb.admin>
