@extends('master')

@section('content')
<div class="offset-3 col-6" style="border-style: solid ; padding:30px ; margin-top: 2%">
    <h1 align=center>Crear Subcategoria</h1>

    <form action="" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo"> Nombre </label>
            <input class="form-control" type="text" name="name" value= "{{ old('name')}}"/>
        </div>

        <div class="form-group">
            <label for="favorite_movie">Categoria</label>
            <select class="form-control" name="category_id">
                    <option value="{{ old('category_id')}}" disabled selected>Seleccione Categoria</option>
                @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" selected>{{ $categoria->name }}
                @endforeach
            </select>
        </div>

        <input type="submit" value="Agregar Subcategoria" />
    </form>

</div>

<div class="offset-3 col-6" style="border-style: solid ; padding:30px ; margin-top: 2%">
    <div  class="form-group">
        @foreach ($categorias as $categoria)
            <h3>{{$categoria->name}}</h1>
            <ul>
                @foreach($categoria->subcategoria as $nombreSub)
                    {{$nombreSub->name .' ' . ';' . ' '  }}
                @endforeach 
            </ul>
        @endforeach
    </div>
</div>
@endsection