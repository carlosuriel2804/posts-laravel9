<x-layouts.app title="Add post">
    <div class="container my-5">
        <div class="d-flex flex-row justify-content-between my-5">
            <h4>Crear nuevo post</h4>
            
        </div>
        <p>Completa los siguientes campos:</p>
        <div class="col-md-12 mb-3">
            <div class="card card-link">
                <form action="{{route('posts.store')}}" method="POST">
                @csrf
                    <div class="card-header bg-dark text-white">
                        <input type="text" class="form-control border-0 bg-transparent text-white" name="title" placeholder="Mi nuevo post">
                    </div>
                    <div class="card-body">
                        <textarea class="form-control border-0 text-dark mb-3" name="body" rows="3" maxlength="120" placeholder="Mi post abarca ..."></textarea>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Agregar post" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>