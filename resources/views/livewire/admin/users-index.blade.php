<div>
    <div class="card">
        <div class="card-header">
            <input wire:keydown="limpiar_page" class="form-control" width="100%" placeholder="Escriba un nombre" wire:model="search">
        </div>
        @if($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10pz">
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
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
            <div class="card-body text-center">
                <strong>No se encuentran coincidencias en tu busqueda... :(</strong>
            </div>
        @endif
    </div>
</div>
