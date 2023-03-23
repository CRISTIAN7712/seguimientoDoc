@extends('../templates.template')
@extends('../templates.nav')
@section('titulo','Sistema de Seguimiento - Docentes')
@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="{{route('docentes.store')}}" method="post">
                    @csrf
                    <label for="nombre">Nombres:</label>                    
                    <input class="form-control" type="text" name="nombre" id="">
                    @error('nombre')
                      <div class="alert alert-danger">{{$message}}</div>                        
                    @enderror
                    <label for="apellido">Apellidos:</label>
                    <input class="form-control" type="text" name="apellido" id="">
                    @error('apellido')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <label for="cedula">Cédula:</label>
                    <input class="form-control" type="text" name="cedula" id="">
                    @error('cedula')
                      <div class="alert alert-danger">{{$message}}</div>                        
                    @enderror
                    <label for="celular">Celular:</label>
                    <input class="form-control" type="text" name="celular" id="">
                    @error('celular')
                      <div class="alert alert-danger">{{$message}}</div>                        
                    @enderror
                    <label for="correo">correo:</label>
                    <input class="form-control" type="text" name="correo" id="">
                    @error('correo')
                      <div class="alert alert-danger">{{$message}}</div>                        
                    @enderror
                    <label for="ciudad">Ciudad:</label>
                    <input class="form-control" type="text" name="ciudad" id="">
                    @error('ciudad')
                      <div class="alert alert-danger">{{$message}}</div>                        
                    @enderror
                    <label for="contrasena">Contraseña:</label>
                    <input class="form-control" type="password" name="contrasena" id="">
                    @error('contraseña')
                      <div class="alert alert-danger">{{$message}}</div>                        
                    @enderror
                    
                    <br><input class="form-control btn btn-success btn-block" type="submit" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($docentes as $docente)
                      <tr>
                        <th scope="row">{{$docente->idDocente}}</th>
                        <td>{{$docente->nombre}}</td>
                        <td>{{$docente->apellido}}</td>
                        <td>{{$docente->correo}}</td>
                        <td>
                           <a href="{{route('docente.edit',$docente->idDocente)}}" class="btn btn-secondary"><i class="fa fa-marker"></i></a>
                          <form action="{{ route('docentes.destroy', $docente->idDocente) }}" method ="POST" >
                              @csrf @method('DELETE')
                              <button type="submit" value="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          </form>
                            
                        </td>
                      </tr>  
                      @endforeach
                    </tbody>      
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection