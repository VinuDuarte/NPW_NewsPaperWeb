<?php 

 
	if ($_SESSION["perfil"] == "Administrador") { 

?>

	<nav>

		<p> <a href="administracao.php"> 				Administração 				</a> </p>
		<p> <a href="cadastro_usuario.php"> 			Cadastrar Usuário 			</a> </p>
		<p> <a href="alterar_inativar_usuario.php"> 	Alterar Usuário 			</a> </p>
		<p> <a href="cadastro_noticias.php"> 			Cadastrar Notícias 			</a> </p>
		<p> <a href="alterar_excluir_noticia.php"> 		Altera/Excluir Notícias 	</a> </p>

	</nav>

<?php 
	
	}
 	elseif($_SESSION["perfil"] == "Operador") { 

 ?>

 	<nav>

		
		<p> <a href="cadastro_usuario.php"> 			Cadastrar Usuário 			</a> </p>
		<p> <a href="alterar_inativar_usuario.php"> 	Alterar Usuário 			</a> </p>


	</nav>

<?php 
	
	}
	
 	else { 

 ?>

 	<nav>

				
		<p> <a href="cadastro_noticias.php"> 			Cadastrar Notícias 			</a> </p>
		<p> <a href="alterar_excluir_noticia.php"> 		Altera/Excluir Notícias 	</a> </p>

	</nav>

<?php

	}
	
?>