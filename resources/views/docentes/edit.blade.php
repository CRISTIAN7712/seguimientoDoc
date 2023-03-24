@extends('../templates.template')
@extends('../templates.nav')
@section('titulo', 'Sistema de seguimiento - Docentes')
@section("content")
<h1>Editar docente</h1>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="{{route('docente.update',$docente->idDocente)}}" method="put">
                    @method('PUT')                        
                        <label for="nombre">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" id="" value="{{$docente->nombre}}">
                        <label for="apellido">Apellido:</label>
                        <input class="form-control" type="text" name="apellido" id="" value="{{$docente->apellidos}}">
                        <label for="cedula">Cédula:</label>
                        <input class="form-control" type="text" name="cedula" id="" value="{{$docente->cedula}}">
                        <label for="celular">Celular:</label>
                        <input class="form-control" type="text" name="celular" id="" value="{{$docente->celular}}">
                        <label for="correo">Correo:</label>
                        <input class="form-control" type="text" name="correo" id="" value="{{$docente->correo}}">
                        <label for="correo">Ciudad:</label>
                        <input class="form-control" type="text" name="ciudad" id="" value="{{$docente->ciudad}}">
                        <label for="contrasena">Contraseña:</label>
                        <input class="form-control" type="password" name="contrasena" id="" value="{{$docente->contrasena}}">
                        <label for="ciudad">Ciudad:</label>
                        <input class="form-control" type="text" name="ciudad" id="" value="{{$docente->contrasena}}">
                        <button class="form-control btn btn-success btn-block mt-3">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
        @endsection
