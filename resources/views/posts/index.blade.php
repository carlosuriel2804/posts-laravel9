<x-layouts.app title="Blog">
    <div class="container my-5">
        <div class="d-flex flex-row justify-content-between my-5">
            <h4>Todos los posts ({{count($posts)}})</h4>
            <a href="{{route('posts.create')}}"><button type="button" class="btn btn-success">Crear nuevo post</button></a>
        </div>
        <div class="row">
            @foreach($posts as $post)
              <div class="col-md-4 mb-3">
                <a href="{{ route('posts.show', $post->id) }}" class="card card-link card-hover">
                  <div class="card-header bg-dark text-white">{{ $post->title }}</div>
                  <div class="card-body">
                    <p class="card-text text-dark">{{ $post->body }}</p>
                  </div>
                </a>
              </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
