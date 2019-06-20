@extends('master')

@section('content')

<main class="caja">

    <div class="container">
      <a href="#"><img src="img/banner_pick_your_treasure.svg" alt=""></a>
    </div>
    <section class="container1">
@foreach($categorias as $categoria)
    <article class="art art1">
    <a href="/category/ {{$categoria->id }}"></a>
    </article>
    <article class="art art2">
      <a href="/category/ {{$categoria->id }}"></a>
    </article>
    <article class="art art3">
      <a href="/category/ {{$categoria->id }}"></a>
    </article>
    <article class="art art4">
      <a href="/category/ {{$categoria->id }}"></a>
    </article>
    <article class="art art5">
      <a href="/category/ {{$categoria->id }}"></a>
    </article>
@endforeach
    </section>
    <section class="banner_publicidad">
      <h1 class="banner"> BANNER DE PUBLICIDAD </h1>
    </section>

</main>

@endsection