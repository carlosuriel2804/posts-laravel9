<header class="d-flex justify-content-center py-3 bg-dark fixed-top">
    <ul class="nav nav-pills">
      
      <li class="nav-item"><a href="{{ route('home') }}" class="nav-link text-white">Home</a></li>
      <li class="nav-item"><a href="{{route('posts.index')}}" class="nav-link text-white">Blog</a></li>
      <li class="nav-item"><a href="{{route('faqs.index')}}" class="nav-link text-white">FAQs</a></li>
      @guest
      <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-white">Login</a></li>    
      <li class="nav-item"><a href="{{route('register')}}" class="nav-link text-white">Sign up</a></li>  
      @endguest
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{Auth::user()->name}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <form action="{{route('logout')}}" method="post">
      @csrf
      <li><button class="col-12" style="background-color: transparent;
        border: none;
        color: #000;
        cursor: pointer;
        text-decoration: none;"> Cerrar sesión</button></li>  
      </form>
        </ul>
      </li>
      @endauth
    </ul>
</header>