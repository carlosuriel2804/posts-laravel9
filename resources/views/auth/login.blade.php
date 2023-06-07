<x-layouts.app title="Login">
    <div class="container my-5">
        <div class="d-flex flex-column justify-content-center align-items-center my-5">
            <div>
                <h4>Iniciar sesión</h4>
            </div>
            <div class="col-3">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                        
                        <input type="email" class="form-control my-3" name="email" placeholder="Email" maxlength="255" value="{{old('email')}}" autofocus>
                        @error('email')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <input type="password" class="form-control my-3" name="password" placeholder="Password" maxlength="255" value="{{old('password')}}">
                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <div class="form-check my-3">
                            <input class="form-check-input" type="checkbox" name="remember" checked>
                            <span class="ml-auto">
                              Recuérdame
                            </span>
                        </div>
                        <div class="d-flex justify-content-end my-3">
                            <input type="submit" value="Iniciar sesión" class="btn btn-success col-12">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-layouts.app>