<x-layouts.app title="{{ $post->title }}">
    <div class="container my-5">
        <div class="col-md-12 mb-3">
            <div class="card card-link">
                <div class="card-header bg-dark text-white">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis auctor est, sed vehicula velit. Nulla quis pulvinar nisl. Praesent dapibus sem ac turpis congue, in blandit arcu feugiat. Donec non lacus id urna pellentesque mollis a auctor lacus. Fusce in ullamcorper neque. Curabitur vulputate nunc vitae felis sollicitudin iaculis. In pellentesque eget odio in lacinia. Suspendisse faucibus velit quis sem molestie, eu ullamcorper justo tristique. Donec varius enim vel mi iaculis vehicula.</p>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('posts.edit', $post)}}" class="btn btn-primary me-3">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>