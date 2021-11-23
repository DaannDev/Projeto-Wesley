<?php

namespace App\Http\Controllers;

use App\Models\Contatos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ContatoController extends Controller
{
    public function contato(){
        return view("site.contato");
    }

    public function register(Request $request){
        $contatos = new contatos();
        $contatos = $contatos -> create($request -> all());
        return Redirect::to("/admin");
    }
    public function mensagem(){
        $mensagens = new contatos();
        $mensagens = $mensagens -> all();
        return view("site.admin",["mensagens"=>$mensagens]);
    }
}
