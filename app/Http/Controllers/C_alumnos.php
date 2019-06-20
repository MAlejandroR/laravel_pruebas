<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_alumnos extends Controller {

    //

    public function mostrar() {
        $alumnos = \App\Alumno::all();
        return view("alumnos", ['alumnos' => $alumnos]);
    }

}
