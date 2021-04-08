@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')

    {{-- @can('admin.roles.create') --}}
        <a class="btn btn-secondary float-right" href="{{ route('admin.roles.create') }}">Agregar rol</a>
    {{-- @endcan --}}

    <h1>Listado de roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Rol</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{ $rol->id }}</td>
                            <td>{{ $rol->name }}</td>
                            <td width="10px">
                                {{-- @can('admin.roles.edit') --}}
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $rol) }}">Editar</a>
                                {{-- @endcan --}}
                            </td>
                            <td width="10px">
                                {{-- @can('admin.roles.destroy') --}}
                                    <form action="{{ route('admin.roles.destroy', $rol) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
                                    </form>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
