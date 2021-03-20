<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ConfigController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('/',function(){
  // return view('home');              //*CHAMADA DE UMA VIEW (before create in resources/views->x.blade.php)
//});

//Route::view('/','home');

// Route::get('/produtos',function(){
// echo "Produtos!";
// });


// Route::get('/produtos/{nomedoproduto}',function($nomeproduto){
// echo "Produto:".$nomeproduto;
// });
// Route::get('/produtos/{nomedoproduto}/comentario/{id}',function($nomeproduto,$id){
// echo "Esse é o comentário ".$id. " do Produto:".$nomeproduto;
// });

//  Route::get('/produtos/{nomedoproduto}',function($nomeproduto){
//  echo "Produto:".$nomeproduto;
//  });

//Route::get('/', 'HomeControlller@index'); não funciona devido a versão

Route::get('/',[HomeController::class,'index']);
Route::get('/produtos',[ProdutoController::class,'index']);
Route::post('/produtos',[ProdutoController::class,'index']);
Route::get('/config',[ConfigController::class,'index']);


