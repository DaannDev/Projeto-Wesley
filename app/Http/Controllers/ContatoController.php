<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        return view("site.contato");
    }

    public function register(Request $request){
        $contato = new Contato();
        $contato = $contato -> create($request -> all());
        return Redirect::to("/admin");
    }
}
