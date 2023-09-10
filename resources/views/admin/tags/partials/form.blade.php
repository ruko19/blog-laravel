<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'ingrese el nombre de la etiqueta']) !!}

    @error('name')
    <div class="mt-2 alert alert-danger" role="alert">
        {{$message}}
      </div>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'ingrese el slug de la etiqueta','readonly']) !!}

    @error('slug')
    <div class="mt-2 alert alert-danger" role="alert">
        {{$message}}
      </div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('color', 'Color')!!}
    {!! Form::select('color', $colors,null, ['class'=>'form-control']) !!}

     @error('color')
    <div class="mt-2 alert alert-danger" role="alert">
        {{$message}}
      </div>
    @enderror

</div>
