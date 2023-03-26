<x-layouts.app title="{{ $post->title }}">
    <div class="container my-5">
        <div class="col-md-12 mb-3">
            <div class="card card-link">
                <div class="card-header bg-dark text-white">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text text-dark">{{ $post->body }}</p>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('posts.edit', $post)}}" class="btn btn-primary me-3">Modificar post</a>
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