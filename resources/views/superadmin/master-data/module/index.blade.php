<x-module.superadmin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
            <a href="{{ url('superadmin/master-data/module/create') }}" class="float-right btn btn-dark"><i
                    class="fas fa-plus"></i> Tambah Module</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="90px">Aksi</th>
                    <th>Nama Module</th>
                    <th>Title</th>
                    <th>Tag</th>
                    <th>Pegawai</th>
                    <th>URL</th>
                </thead>
                <tbody>
                    @foreach ($list_module->sortByDesc('created_at')->values() as $module)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="superadmin/master-data/module"
                                        id="{{ $module->id }}" />
                                    <x-template.button.edit-button url="superadmin/master-data/module"
                                        id="{{ $module->id }}" />
                                    <x-template.button.delete-button url="superadmin/master-data/module"
                                        id="{{ $module->id }}" />
                                </div>
                            </td>
                            <td>{{ $module->name }}</td>
                            <td>{{ $module->title }}</td>
                            <td>{{ $module->tag }}</td>
                            <td>{{ $module->role_count }}</td>
                            <td>{{ $module->url }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.superadmin>
