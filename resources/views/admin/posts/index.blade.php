@extends('layouts.admin_app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i post</h1>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Crea nuovo</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>Content</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>{{ str_limit($post->content, 10, ' (...)') }}</td>
                                <td>{{ $post->category->title }}</td>
                            </tr>
                          @empty
                            <h2>Non ci sono post</h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
