<x-layouts.app title="Login">
    <div class="container my-5">
        <div class="d-flex flex-row justify-content-between my-5">
            <h4>Iniciar sesión</h4>
            
        </div>
        
        <p class="my-5">Completa los siguientes campos:</p>
        <div class="col-md-12 mb-3">
                <form action="{{route('login')}}" method="POST">
                @csrf
                    
                    <input type="email" class="form-control my-5" name="email" placeholder="Email" value="{{old('email')}}">
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    <input type="password" class="form-control my-5" name="password" placeholder="Password" value="{{old('password')}}">
                    @error('password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="form-check my-5">
                        <input class="form-check-input" type="checkbox" name="remember">
                        <span class="ml-auto">
                          Recuérdame
                        </span>
                    </div>

                    <div class="d-flex justify-content-end my-5">
                        <input type="submit" value="Iniciar sesión" class="btn btn-success">
                    </div>
                </form>
            
        </div>
    </div>
</x-layouts.app>