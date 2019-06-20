<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acciones extends Controller {

    //

    public function aleatorio() {
        $a = Rand(1, 100);
        return view("valor", ['valor' => $a, "nombre" => "Luisa"]);
    }

}
