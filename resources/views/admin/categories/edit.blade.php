@extends('adminlte::page')

@section('title', 'Ruko BLog')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')

@if (session('success'))

<div class="alert alert-success">
    <strong>{{session('success')}}</strong>

</div>

@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($category,['route'=>['admin.categories.update',$category],'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese la cagegorias']) !!}


            @error('name')
            <div class="mt-3 alert alert-danger" role="alert">
                {{$message}}
              </div>

            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese la cagegorias','readonly']) !!}

            @error('slug')
            <div class="mt-3 alert alert-danger" role="alert">
                {{$message}}
              </div>
            @enderror
        </div>

        {!! Form::submit('Editar categoria', ['class'=>'btn-primary']) !!}



        {!! Form::close() !!}

    </div>
</div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
    </script>


@endsection
