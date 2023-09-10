@extends('adminlte::page')

@section('title', 'Ruko BLog')

@section('content_header')
    <h1>Editar etiqueta</h1>
@stop

@section('content')

@if (session('success'))
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>
</div>

@endif


<div class="card">
    <div class="card-body">
        {!! Form::model($tag, ['route'=>['admin.tags.update',$tag],'method'=>'put']) !!}
        @include('admin.tags.partials.form')


        {!! Form::submit('Actualizar etiqueta', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop