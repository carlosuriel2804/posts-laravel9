<x-layouts.app title="Home">
    <div class="container my-5">
        <h4>Modificar post</h4>
        <hr style="border-color: grey;">
        <form action="{{route('posts.update', $post)}}" method="POST">
        <div class="col-md-12 mb-3 my-5">
                
                @csrf
                @method('PATCH')
               
                <div class="form-floating my-5">
                    @php
                        $titleValue = old('title', $post->title);
                        $bodyValue = old('body', $post->body);
                    @endphp
                    <input type="text" class="form-control" name="title" maxlength="255" placeholder="Mi nuevo post" value="{{$titleValue}}">
                    <label for="title">Título del post</label>    
                    <small class="form-text text-muted">The character limit is 255.</small>
                    @error('title')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                        <div class="form-floating my-5">
                            <textarea class="form-control" name="body" placeholder="Leave a comment here" maxlength="255" style="height: 200px">{{$bodyValue}}</textarea>
                            <label for="body">Contenido del post</label>
                            <small class="form-text text-muted">The character limit is 255.</small>
                        @error('body')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>
                        
                
        </div>
        
            <hr style="border-color: grey;">
            <div class="d-flex justify-content-end">
                <input type="submit" value="Guardar cambios" class="btn btn-success">
            </div>
        </form>    
    </div>
</x-layouts.app>

