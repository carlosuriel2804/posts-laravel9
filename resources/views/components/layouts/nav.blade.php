<header class="d-flex justify-content-center py-3 bg-dark fixed-top">
    <ul class="nav nav-pills">
      @auth
      <li class="nav-item"><a class="nav-link text-white">Sesión iniciada como {{Auth::user()->name}}</a></li>
      @endauth
      <li class="nav-item"><a href="{{ route('home') }}" class="nav-link text-white">Home</a></li>
      <li class="nav-item"><a href="{{route('posts.index')}}" class="nav-link text-white">Blog</a></li>
      <li class="nav-item"><a href="{{route('faqs.index')}}" class="nav-link text-white">FAQs</a></li>
      @guest
      <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-white">Login</a></li>    
      <li class="nav-item"><a href="{{route('register')}}" class="nav-link text-white">Sign up</a></li>  
      @endguest
      @auth
      <form action="{{route('logout')}}" method="post">
      @csrf
      <li class="nav-item"><button class="nav-link text-white">Cerrar sesión</button></li>  
      </form>
      @endauth
    </ul>
</header>