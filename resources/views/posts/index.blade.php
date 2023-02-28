<x-layouts.app title="Blog">
    <div class="container my-5">
        <div class="d-flex flex-row justify-content-between my-5">
            <h1>Blog</h1>
            <a href="{{route('posts.create')}}"><button type="button" class="btn btn-success">Add post</button></a>
        </div>
        <div class="row">
            @foreach($posts as $post)
              <div class="col-md-4 mb-3">
                <a href="{{ route('posts.show', $post->id) }}" class="card card-link card-hover">
                  <div class="card-header bg-dark text-white">{{ $post->title }}</div>
                  <div class="card-body">
                    <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis auctor est, sed vehicula velit. Nulla quis pulvinar nisl. Praesent dapibus sem ac turpis congue, in blandit arcu feugiat. Donec non lacus id urna pellentesque mollis a auctor lacus. Fusce in ullamcorper neque. Curabitur vulputate nunc vitae felis sollicitudin iaculis. In pellentesque eget odio in lacinia. Suspendisse faucibus velit quis sem molestie, eu ullamcorper justo tristique. Donec varius enim vel mi iaculis vehicula.</p>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
    </div>
</x-layouts.app>
