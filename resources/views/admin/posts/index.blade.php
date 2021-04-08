@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif

    <a class="btn btn-secondary float-right" href="{{ route('admin.posts.create') }}">Agregar post</a>

    <h1>Listado de Post</h1>
@stop

@section('content')

    @livewire('admin.post-index')

@stop

@section('css')

@stop

@section('js')

@stop
