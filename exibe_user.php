<!DOCTYPE html>
<?php session_start();?>

<html>

	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title> Acesso Restrito / Alterar e/ou Inativar Usuários </title>

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

                        <li> Olá  <?php include "valida_login.php"; ?> </li>
                        <li><a href=""> Sair </a></li> 

                    </ul>

				</div>

			</div>

			<div id="conteudo_especifico">
				
				<div class="centralizar">

					<h1> ALTERAR E/OU INATIVAR USUÁRIOS </h1>
					
				</div>			
				
				<div class="div_esquerda">

					<?php

						include "menu_administrador.php";

					?>
					
				</div>				
				<div class="div_direita">
           <?php
            $conectar = mysqli_connect("localhost","root","","vinicius_bd");

          $cod = $_GET["codigo_user"];

        $sql_pesquisa = "SELECT nome_user,login_user,perfil_user,status_user,imagem_user
                           FROM usuarios 
                           where cod_user='$cod' ";

        
                      $resultado_pesquisa = mysqli_query($conectar,$sql_pesquisa);
                              

           $registro = mysqli_fetch_row($resultado_pesquisa);
         
          ?>

          <table class="esquerda">
             <tr>
                <td>
                 <?php echo "<p> <img src=".$registro[4]."> </p>"; 
                 ?> 
                 </td>

                 <td>
                   <?php
                     echo "<p> Nome: $registro[0] </p>";
                     echo "<p> login: $registro[1] </p>";
                     echo "<p> Perfil: $registro[2] </p>";
                     if ($registro[3] == "a") {
                      echo "<p> Ativo </p>";
                  } else {
                    echo "<p> Inativo </p>";

                  }

                    ?>
                 </td>
                



                </tr>
          </table>   
					
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