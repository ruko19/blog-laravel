@extends('adminlte::page')

@section('title', 'Ruko BLog')

@section('content_header')
    <a class="float-right btn btn-secondary btn-sm" href="{{route('admin.posts.create')}}">Nuevo Post</a>
    <h1>Listado de posts</h1>
@stop

@section('content')

@livewire('admin.post-index')



@stop
