<?php 
session_start();
$conectar = mysqli_connect("localhost","root" ,"" ,"vinicius_bd"); #CONECTANDO AO BANCO JOSE
$nome = $_POST["nome"];  #Recebendo os dados do cadastro_Usuario
$login = $_POST["login"];
$senha = $_POST["senha"];
$perfil = $_POST["perfil"];
$imagem = $_FILES["imagem"];

$sql_consulta = "select login_user from usuarios 
                      WHERE login_user = '$login'; ";

$resultado_consulta = mysqli_query($conectar, $sql_consulta);


$linhas = mysqli_num_rows($resultado_consulta);

if ($linhas == 1) { #Contando as linhas da Tabela
	echo "<script> alert ('login já cadastrado.Tente outro')
           </script>";
           echo "<script> location.href = ('cadastro_usuario.php') </script>";
} else {
 #para usuario que não existe
	//Pega o nome do arquivo e já coloca o caminha relativo
	$imagem_nome = "img/".$imagem["name"];
	// Faz o upload da imagem
	move_uploaded_file($imagem["tmp_name"], $imagem_nome);

	$sql_cadastrar = "INSERT INTO usuarios 
	                  (nome_user, perfil_user , login_user ,senha_user, imagem_user)
	                          VALUES 
	                          ('$nome' , '$perfil' , '$login' , '$senha' , '$imagem_nome');";

	  $resultado_cadastrar = mysqli_query($conectar , $sql_cadastrar);

	 if ($resultado_cadastrar == true) {
	  	
	  	 echo "<script> alert ('$nome cadastrado com sucesso!')
	  	 </script>";

	  	 echo "<script> location.href = ('cadastro_usuario.php')
	  	   </script>";
	  } else {
	  	
	  	echo "<script> alert ('Ocorreu um erro no servidor. tente De Novo!')
                 </script>";
        
              echo "<script>  location.href = ('cadastro_usuario.php')
                         </script>";
	  }
	}
      
?>