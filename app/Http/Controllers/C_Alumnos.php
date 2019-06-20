<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Alumnos extends Controller {

    //
    public function mostrar() {
        $alumnos = \App\Alumno::all();
        foreach ($alumnos as $alumno)
            $nombre[] = $alumno->nombre;
        return view("alumnos", ['alumnos' => $nombre]);
    }

}
