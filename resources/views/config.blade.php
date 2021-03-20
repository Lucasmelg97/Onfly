<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentoshow</title>

<?php
class GerenciadorConexao{

	/* Define um método público e estático para se conectar ao banco de dados */
	/* Público porque ele pode ser chamado de fora desta classe*/
	/* Estático porque ele pode ser acessado sem instanciar a classe */
	public static function conectar(){

		/* Abre uma conexão com o servidor MySQL e retorna um identificador */
		$conexao = mysqli_connect("localhost", "root","","onfly_app") or print(mysql_error());

		//or die('Não foi possível estabelecer a conexão: ' . mysql_error() );

		/* Verifica se a conexão com o banco foi bem sucedida */
		if( mysqli_connect_error() )
  			echo "Falha ao conectar no banco de dados MySQL: " . mysqli_connect_error();

       if( mysqli_connect_error()==false )
         echo "certo";

		/* Retorna o identificador da conexão que será utilizado mais tarde */
		/* Para fechar a conexão */
		return $conexao;

	}

}

?>
</head>
<body>

</body>
</html>
