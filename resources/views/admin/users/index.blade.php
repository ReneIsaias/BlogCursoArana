@extends('adminlte::page')

@section('title', 'Ususarios')

@section('content_header')

    <h1>Listado de Usuarios</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif

    @livewire('admin.users-index')

@stop

@section('css')

@stop

@section('js')

@stop
