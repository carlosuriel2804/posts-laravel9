<x-layouts.app title="{{ $post->title }}">
    <div class="container my-5">
        <div class="d-flex flex-row justify-content-between my-5">
            <h4>Contenido del post</h4>
            @guest
                <p>Para modificar o eliminar este post debes <a href="{{route('login')}}">iniciar sesión</a> o <a href="{{route('register')}}">registrarte</a></p>
            @endguest
        </div>
        <div class="col-md-12 mb-3 my-5">
            <div class="card card-link">
                <div class="card-header bg-dark text-white">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text text-dark">{{ $post->body }}</p>
                    <div class="d-flex justify-content-end">
                        @auth
                        <a href="{{route('posts.edit', $post)}}" class="btn btn-primary me-3">Modificar post</a>
                        @endauth
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            @auth
                            <input type="submit" value="Eliminar post" class="btn btn-danger">
                            @endauth
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>