<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {

        //opcao 1
        // $dados2=$request->all();
        // //print_r($dados2); //imprimo todos os dados.
        // $usuario= $dados2['usuario'];
        // $senha=$dados2['senha'];

        $usuario=$request->input('usuario');
        $senha=$request->input('senha');





    return view('produtos' ,['usuario'=>$usuario,'senha'=>$senha]);
    }

}
