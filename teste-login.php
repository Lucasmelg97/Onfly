<?php
session_start();
include('config.php');
if((empty($_POST['usuario']))||(empty($_POST['senha']))){
    header('location:front/index.php');
    exit();
}
$usuario=$_POST['usuario'];
$senha= $_POST['senha'];



$query="select *from acesso where usuario='{$usuario}' and senha='{$senha}'";
$result=mysqli_query((mysqli_connect("localhost", "root","","onfly_app")),$query);
$row=mysqli_num_rows($result);
echo $query;
echo $row;


if($row==1){

$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;
header('location:resources/views/produtos.blade.php');

}
else if($row==0)
{
    unset( $_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location: front/index.php');

}
exit;?>
