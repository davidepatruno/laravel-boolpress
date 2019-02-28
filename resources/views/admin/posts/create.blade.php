@extends('layouts.admin_app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Aggiungi un nuovo post</h1>
        <form class="form-group" action="{{ route('admin.posts.store')}}" method="post">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="title">Titolo Post</label>
            <input type="text" name="title" placeholder="inserisci il titolo del post" class="form-control">
          </div>
          <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" placeholder="inserisci il nome dell'autore del post" class="form-control">
          </div>
          <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea name="content" rows="8" cols="80" placeholder="Inserisci il testo del post" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control" name="category_id">
              <option value="---">---</option>
              @foreach ($categories as $category) {
                <option value="{{ $category->id }}">{{ $category->title }}</option>
              }
              @endforeach
            </select>
          </div>
          <input type="submit" name="Salva" value="Salva Post">
        </form>
      </div>
    </div>
  </div>
@endsection
