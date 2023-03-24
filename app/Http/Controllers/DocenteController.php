<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$docentes = Docente::paginate(10)->orderBy('idDocente','desc');
        //session(['message'=> 'Registro exitoso']);
        //session(['color'=>'warning']);
        $docentes = Docente::orderBy('created_at', 'desc')->paginate(10);
        return view("docentes.index", compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|unique:docentes',
            'celular' => 'required',
            'correo' => 'required|unique:docentes',
            'contrasena' => 'required',
            'ciudad' => 'required'
        ]);
    
        // Creamos un nuevo objeto Docente con los datos validados
        $docente = new Docente;
        $docente->nombre = $validatedData['nombre'];
        $docente->apellidos = $validatedData['apellido'];
        $docente->cedula = $validatedData['cedula'];
        $docente->celular = $validatedData['celular'];
        $docente->correo = $validatedData['correo'];
        $docente->contrasena = $validatedData['contrasena'];
        $docente->ciudad = $validatedData['ciudad'];
        $docente->save();
        // Redirigimos al usuario a la página principal de Docentes
        //session()->flash('success', 'Registro guardado exitosamente');
        session(['message'=> 'Registro exitoso']);
        session(['color'=>'warning']);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $docente = Docente::findOrFail($id);
        return view("docentes.edit", compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docente = Docente::findOrFail($id);
        $docente->nombre = $request->input('nombre');
        $docente->apellido = $request->input('apellido');
        $docente->cedula = $request->input('cedula');
        $docente->celular = $request->input('celular');
        $docente->correo = $request->input('correo');
        $docente->contrasena = $request->input('contrasena');
        $docente->ciudad = $request->input('ciudad');
        $docente->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docentes = Docente::findOrFail($id);
        $docentes->delete();
        session(['message'=> 'Registro Eliminado']);
        session(['color'=>'danger']);
        return redirect()->action([DocenteController::class, 'index']);
    }
}
