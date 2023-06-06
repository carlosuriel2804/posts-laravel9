<x-layouts.app title="Add post">
    <div class="container my-5">
        <div class="d-flex flex-row justify-content-between">
            <h4>Crear nuevo post</h4>       
        </div>
        <hr style="border-color: grey;">
        <p>Completa todos los campos para crear un nuevo post</p>
        <div class="col-md-12 mb-3">
                <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <div class="form-floating my-5">
                    <input type="text" class="form-control" name="title" placeholder="Mi nuevo post" value="{{old('title')}}" autofocus>
                    <label for="floatingTextarea2">Título del post</label>
                    @error('title')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                        
                        
                        <div class="form-floating my-5">
                            <textarea class="form-control" name="body" placeholder="Leave a comment here" maxlength="1000" style="height: 250px">{{old('body')}}</textarea>
                            <label for="floatingTextarea2">Contenido del post</label>
                        </div>
                        @error('body')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <hr>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Agregar post" class="btn btn-success">
                        </div>
                </form>
        </div>
    </div>
</x-layouts.app>