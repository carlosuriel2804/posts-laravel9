<x-layouts.app title="Registrarse">
    <div class="container my-5">
        <div class="d-flex flex-row justify-content-between my-5">
            <h4>Registrarse</h4>
            
        </div>
        
        <p>Completa los siguientes campos:</p>
        <div class="col-md-12 mb-3">
                <form action="{{route('register')}}" method="POST">
                @csrf

                    <input type="text" class="form-control my-5" name="name" placeholder="Nombre" value="{{old('name')}}" autofocus>
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    <input type="email" class="form-control my-5" name="email" placeholder="Correo electrónico" value="{{old('email')}}"> 
                    @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <input type="password" class="form-control my-5" name="password" placeholder="Contraseña">
                    @error('password')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    <input type="password" class="form-control my-5" name="password_confirmation" placeholder="Repite la contraseña">
                    @error('password_confirmation')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Registrarme" class="btn btn-success">
                    </div>
                </form>
            
        </div>
    </div>
</x-layouts.app>