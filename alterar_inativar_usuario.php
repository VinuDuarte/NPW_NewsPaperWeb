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

                       $sql_consulta = "SELECT cod_user,nome_user,perfil_user,status_user
                                            FROM usuarios";
                      
                      $resultado_consulta = mysqli_query($conectar,$sql_consulta);
                     					?>
                 <table>
                 	<tr>
                 		<td class ="esquerda">
                 			<p> Nome</p>
                 		</td>
                        
                       <td>
                           	<p> Perfil </p>
                        </td>

                        <td>
                        	<p> Status </p>
                        </td>

                        <td class="direita">
                        	<p> Ação </p>
                        </td>
                  	 </tr>
                   <?php
                         while ($registro= mysqli_fetch_row($resultado_consulta)) {
                     
                   ?>
         	      <tr>
                   	<td class="esquerda">
                   		<p>
                   			<a href="exibe_user.php?codigo_user=<?php echo $registro[0] ?>"> 
                             <?php 
    							echo "$registro[1]";
                             ?>
                             </a>
                   		</p>
                   	</td> 

                     
                     <td>	
                       	 <p>
                        	<?php echo "$registro[2]"; ?>
                        	</p>
                     	</td>


                     <td>
                     	<p>
                     		<?php 
                               if ($registro[3] =="a") {
                               	echo "Ativo";
                              } else {
                              	echo "inativo";
                              }
	                     		?>
                     		</p>
                     	</td>	
                      
                      <td class="direita">
                      	<p>
                      		<a href="altera_user.php?codigo_user=<?php echo $registro[0] ?>">
                      			Alterar
                      			</a>
                      		</p>
                      	</td>


            	 </tr>
            	 <?php 
                     }
            	 ?>  
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