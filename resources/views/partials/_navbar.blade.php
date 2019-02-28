<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">BOOLPRESS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                  <li>
                    Filtra per categoria
                    <button action="{{ route('public.category', $category->id)}}" class="btn btn-primary">Filtra</a>
                      <select class="form-control" name="category_id">
                        <option value="---">---</option>
                        @foreach ($categories as $category) {
                          <option value="{{ $category->id }}">{{ $category->title }}</option>
                        }
                        @endforeach
                      </select> --}}
                  </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
