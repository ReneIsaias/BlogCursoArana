<div class="card">
    <div class="card-header">
        <input class="form-control" name="search" wire:model="search" placeholder="Ingrese el nombre de un usuario" type="text">
    </div>

    @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    @else
        <div class="card-body">
            <strong class="text-muted">No hay ningun registro que coincida con la búsqueda "{{$search}}"</strong>
        </div>
    @endif
</div>
