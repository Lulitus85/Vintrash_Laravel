@extends('master')

@section('content')
<div class="offset-3 col-6" style="border-style: solid ; padding:30px ; margin-top: 2%">
    <h1 align=center>Crear Categoría</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="titulo"> Nombre </label>
            <input class="form-control" type="text" name="name" value= "{{ old('name')}}"/>
        </div>

        <div class="form-group">
            <label for="poster"> Foto de la categoría</label>
            <input class="form-control" type="file" name="photo">
        </div>

        <input type="submit" value="Agregar Categoria" />
    </form>

</div>

<div class="offset-3 col-6" style="border-style: solid ; padding:30px ; margin-top: 2%">
    <div  class="form-group">
        @foreach ($categorias as $categoria)
            <h3>{{$categoria->name}}</h1>
            <img src="/storage/{{ $categoria->photo }}" alt="photo">
        @endforeach
    </div>
</div>
@endsection