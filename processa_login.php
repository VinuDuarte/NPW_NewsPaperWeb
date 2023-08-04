<?php 

	session_start();

	$conectar = mysqli_connect("localhost", "root", "", "vinicius_bd");

	$login = $_POST["login"];
	$senha = $_POST["senha"];

	$sql_consulta = "select COD_USER, LOGIN_USER, SENHA_USER, PERFIL_USER from usuarios
						where LOGIN_USER = '$login' and SENHA_USER = '$senha'; ";

	$resultado_consulta = mysqli_query($conectar, $sql_consulta);

	$linha = mysqli_num_rows($resultado_consulta);

	if ($linha == 1) {

		$_SESSION["login"] = $login ;

		$registro = mysqli_fetch_row($resultado_consulta);

		$_SESSION["perfil"] = $registro[3] ;
		$_SESSION["codigo_user"] = $registro[0];

		echo "<script> location.href = ('administracao.php') </script>";

	} else {
		
		echo "<script> alert ('Login ou Senha incorretos! Tente Novamente!') </script>";
		echo "<script> location.href = ('acesso_restrito.php') </script>";

	}
	

 ?>