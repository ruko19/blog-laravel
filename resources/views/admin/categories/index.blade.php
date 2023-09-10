@extends('adminlte::page')

@section('title', 'Ruko BLog')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop


@section('content')

@if (session('success'))

<div class="alert alert-danger">
    <strong>{{session('success')}}</strong>

</div>

@endif
    <div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.categories.create')}}">Agregar categorias</a>

    </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit',$category)}}">Editar</a>

                        </td>
                        <td  width="10px">
                            <form action="{{route('admin.categories.destroy',$category)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" ">Elimnar</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
