<x-layouts.app title="Home">
    <div class="container my-5">
        <h1>Edit post</h1>
        <p>Da click a la parte que quieras actualizar del post</p>
        <div class="col-md-12 mb-3">
            <div class="card card-link">
                <form action="{{route('posts.update', $post)}}" method="POST">
                @csrf
                @method('PATCH')
                    <div class="card-header bg-dark text-white">
                        <input type="text" class="form-control border-0 bg-transparent text-white" name="title" value="{{ $post->title }}" placeholder="Mi post">
                    </div>
                    <div class="card-body">
                        <textarea class="form-control border-0 text-dark mb-3" name="body" rows="3" maxlength="120" placeholder="Mi post abarca ...">{{$post->body}}</textarea>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Guardar cambios" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</x-layouts.app>

