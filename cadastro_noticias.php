<?php 

	session_start();

?>

<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title> Acesso Restrito / Cadastro de Notícias </title>

		<link rel="stylesheet" type="text/css" href="_css/reset.cs"/>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="_css/menu.css"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"/>

		<script language="javascript" type="text/javascript" src="_js/script.js">  </script>

	</head>

	<body>

		<div id="principal">

			<div id="topo">

				<div id="logo">

					<h1> Portal de Notícias </h1>
					<h4> Desenvolvimento Web II</h4>
					<h4> Técnico em Informática</h4>

				</div>

				<div id="menu_global"  class="menu_global">

					 <ul>

                        <li> Olá <?php include "valida_login.php"; ?></li>
                        <li><a href="acesso_restrito.php"> Sair </a></li> 

                    </ul>

				</div>

			</div>

			<div id="conteudo_especifico">
				
				<div class="centralizar">

					<h1> CADRASTO DE NOTÌCIAS </h1>
					
				</div>			
				
				<div class="div_esquerda">

					<?php

						include "menu_administrador.php";

					?>
					
				</div>				
				<div class="div_direita">

					<form  method="post" action="processa_cadastra_noticias.php" enctype="multipart/form-data">

						<p> 
							
					   		Manchete: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   		<input type="text" name="manchete" required> 

						</p>

						<p> 

					   		Resumo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   		<input type="text" name="resumo" required> 

						</p>

						<p> 

					   		Texto: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   		<textarea name="texto" cols="22" required></textarea> 

						</p>

						<p> 

					   		Imagem: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   		<input type="file" name="imagem" required> 

						</p>

						<p>
							Categoria: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<select name="categoria">
							
								<option value="hardware"> Hardware </option>
								<option value="software"> Software </option>

							</select>

						</p>

						<p> 

							<br/>
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="submit" value="Cadastrar Notícia">

						 </p>

					</form>
					
				</div> 

			</div>

			<div id="rodape">

				<div id="texto_institucional">

					<h6> ETB - Escola Técnica de Brasília </h6> 
					<h6> Curso - Técnico em Informática </h6> 
					<h6> Disciplina - Desenvolvimento Web II </h6> 
					
				</div>

			</div>
			
		</div>

	</body>

</html>	