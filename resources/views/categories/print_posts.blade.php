@extends('layouts.public_app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Tutti i post della categoria {{ $category->title }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h3>Clicca il titolo per leggere il post completo</h3>
      </div>
      <ul>
        @forelse ($posts as $post)
          <li><a href="">{{ $post->title}}</a></li>
        @empty
          <h1>Non ci sono post con la categoria selezionata</h1>
        @endforelse
      </ul>
    </div>
  </div>
@endsection
