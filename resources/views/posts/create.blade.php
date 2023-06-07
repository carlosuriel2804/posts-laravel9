<x-layouts.app title="Add post">
    <div class="container my-5">
        <div class="d-flex flex-row justify-content-between">
            <h4>Crear nuevo post</h4>       
        </div>
        <hr style="border-color: grey;">
        <p>Completa todos los campos para crear un nuevo post</p>
        <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="col-md-12">
                <div class="form-floating my-5">
                    <input type="text" class="form-control" name="title" maxlength="255" placeholder="Mi nuevo post" value="{{old('title')}}">
                    <label for="title">Título del post</label>    
                    <small class="form-text text-muted">The character limit is 255.</small>
                    @error('title')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                        <div class="form-floating my-5">
                            <textarea class="form-control" name="body" placeholder="Leave a comment here" maxlength="255" style="height: 200px">{{old('body')}}</textarea>
                            <label for="body">Contenido del post</label>
                            <small class="form-text text-muted">The character limit is 255.</small>
                        @error('body')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>
                        
                
            
        </div>
        <hr style="border-color: grey;">
        <div class="d-flex justify-content-end">
            <input type="submit" value="Agregar post" class="btn btn-success">
        </div>
        </form>
    </div>
</x-layouts.app>