<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {echo "Controle recebe dados aqui ";
     $usuario="lucas";
     $senha="senha123";
     $dados=['usuario'=>$usuario,'senha'=>$senha];               //criando array com os dados

    return view('home',$dados);
    }

}
