<x-layouts.app title="Registrarse">
    <div class="container my-5">
        <div class="d-flex flex-column justify-content-center align-items-center my-5">
            <div>
                <h4>Registrarse</h4>
            </div>
            <div class="col-3">
                <form action="{{route('register')}}" method="POST">
                    @csrf
    
                        <input type="text" class="form-control my-3" name="name" placeholder="Nombre" maxlength="255" value="{{old('name')}}" autofocus>
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <small class="form-text text-muted">The character limit for name is 255.</small>
                        <input type="email" class="form-control my-3" name="email" placeholder="Correo electrónico" maxlength="255" value="{{old('email')}}"> 
                        @foreach ($errors->get('email') as $error)
                        <small class="text-danger">{{ $error }}</small>
                        @endforeach
                        <small class="form-text text-muted">The character limit for email is 255.</small>
                        <input type="password" class="form-control my-3" name="password" maxlength="255" placeholder="Contraseña">
                        @foreach ($errors->get('password') as $error)
                        <small class="text-danger">{{ $error }}</small>
                        @endforeach
                        <small class="form-text text-muted">The character limit for password is 255.</small>
                        <input type="password" class="form-control my-3" name="password_confirmation" maxlength="255" placeholder="Repite la contraseña">
                        @error('password_confirmation')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Registrarme" class="btn btn-success col-12">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-layouts.app>