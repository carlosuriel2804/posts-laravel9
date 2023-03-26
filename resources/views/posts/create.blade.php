<x-layouts.app title="Add post">
    <div class="container my-5">
        <h1>Add post</h1>
        <p>Please fill in the following fields</p>
        <div class="col-md-12 mb-3">
            <div class="card card-link">
                <form action="{{route('posts.store')}}" method="POST">
                @csrf
                    <div class="card-header bg-dark text-white">
                        <input type="text" class="form-control border-0 bg-transparent text-white" name="title" placeholder="My new post">
                    </div>
                    <div class="card-body">
                        <textarea class="form-control border-0 text-dark mb-3" name="body" rows="3" placeholder="Description of my new post"></textarea>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Save" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</x-layouts.app>