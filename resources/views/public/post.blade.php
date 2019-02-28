@extends('layouts.public_app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>{{ $post->title}}</h1>
        <h3>{{ $post->author}}</h3>
        <div class="col-8">
          <p>{{$post->content}}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
