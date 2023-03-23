<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $docente = new Docente;
        $docente->nombre="Fabian";
        $docente->apellido="Parra";
        $docente->cedula="98";
        $docente->celular="318";
        $docente->correo="fparra@gmail.com";
        $docente->ciudad="Pasto";
        $docente->contrasena="123456";
        $docente->save();

        $docente2 = new Docente;
        $docente2->nombre="Alvaro";
        $docente2->apellido="Martinez";
        $docente2->cedula="98";
        $docente2->celular="318";
        $docente2->correo="amartinez@gmail.com";
        $docente2->ciudad="Pasto";
        $docente2->contrasena="123456";
        $docente2->save();

        $docente3 = new Docente;
        $docente3->nombre="Giovanni";
        $docente3->apellido="Hernandez";
        $docente3->cedula="98";
        $docente3->celular="318";
        $docente3->correo="ghernandez@gmail.com";
        $docente3->ciudad="Pasto";
        $docente3->contrasena="123456";
        $docente3->save();

        $docente4 = new Docente;
        $docente4->nombre="Robinson";
        $docente4->apellido="Jimenez";
        $docente4->cedula="98";
        $docente4->celular="318";
        $docente4->correo="rjimenez@gmail.com";
        $docente4->ciudad="Pasto";
        $docente4->contrasena="123456";
        $docente4->save();
    }
}
