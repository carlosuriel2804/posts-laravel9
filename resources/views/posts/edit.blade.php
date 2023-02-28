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
                        <input type="text" class="form-control border-0 bg-transparent text-white" name="title" value="{{ $post->title }}">
                    </div>
                    <div class="card-body">
                        <textarea class="form-control border-0 text-dark mb-3" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis auctor est, sed vehicula velit. Nulla quis pulvinar nisl. Praesent dapibus sem ac turpis congue, in blandit arcu feugiat. Donec non lacus id urna pellentesque mollis a auctor lacus. Fusce in ullamcorper neque. Curabitur vulputate nunc vitae felis sollicitudin iaculis. In pellentesque eget odio in lacinia. Suspendisse faucibus velit quis sem molestie, eu ullamcorper justo tristique. Donec varius enim vel mi iaculis vehicula.</textarea>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Update" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</x-layouts.app>

