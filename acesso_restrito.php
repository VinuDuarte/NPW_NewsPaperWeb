
<?php session_start(); ?>

<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title> Acesso Restrito </title>

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

					 

				</div>

			</div>

			<div id="conteudo_especifico">
				
				<div class="centralizar">

					<h1> Acesso Apenas Para Funcionários </h1>

					<form method="post" action="processa_login.php">
						
						<p>
							
							Login: <br/>
							<input type="text" name="login" required>

						</p>

						<p>
							
							Senha: <br/>
							<input type="password" name="senha" required>

						</p>

						<p> <input type="submit" value="Entrar"> </p>

					</form>					
					
				</div>			
				
				<div class="div_esquerda">

					
					
				</div>				
				<div class="div_direita">

					
					
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