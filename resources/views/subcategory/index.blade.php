@extends('master')

@section('content')

{{-- 
<div class="form-group">
        @foreach ($subcategorias as $subcategoria)
            <h1>{{$subcategoria->categoria->name}}</h1>
            <ul>
                <li>{{ $subcategoria->name }}</li>
            </ul>
        @endforeach
</div> --}}


<div class="form-group">

    @foreach ($subcategorias->categoria as $categoria)
        <h1>{{$categoria->name}}</h1>
        <ul>
            @foreach ($subcategorias as $subcategoria)
                <li>{{$subcategoria->name}}</li>
            @endforeach
        </ul>
    @endforeach

</div>

@endsection