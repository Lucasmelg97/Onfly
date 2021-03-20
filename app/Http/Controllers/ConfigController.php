<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {

        //opcao 1
        // $dados2=$request->all();
        // //print_r($dados2); //imprimo todos os dados.
        // $usuario= $dados2['usuario'];
        // $senha=$dados2['senha'];

        //$usuario=$request->input('usuario');
        //$senha=$request->input('senha');





    return view('config');
    }

}
