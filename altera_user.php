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

                     $codigo_user = $_GET["codigo_user"];

                     $sql_pesquisa = "SELECT nome_user,perfil_user,login_user,senha_user,status_user,imagem_user 
                                       FROM usuarios where cod_user = '$codigo_user' ";

                     $resultado_pesquisa = mysqli_query($conectar,$sql_pesquisa);

                     $registro = mysqli_fetch_row($resultado_pesquisa);
                  ?>

                  <form method="post" action="processa_altera_user.php"
                                                             enctype="multipart/form-data">

       <!-- Campos escodidos para envio de formulario -->
       <input type="hidden" name="codigo" value="<?php $codigo_user;?>">
       <input type="hidden" name="perfil" value="<?php $registro[1];?>">
       
      <?php 
     	if ($registro[1] <> "administrador") 
          	{
           	   ?>  

         <table class="centralizar">
           	   	<tr> <!-- pRIMEIRA LINHA DA TABELA-->
           	   		<td> <p> Nome: </p>	</td>	
           	 	
                   <td> 
                       <p>
                       	<input type="text" name="nome"
                       	                 value="<?php echo"$registro[0]"; ?>">
                       </p>
                   </td>

           	 	</tr>
           	 	  <tr>
           	 	  	<td>
           	 	  		<p> Perfil: </p>
           	 	  	</td>
           	 	  	<td>
           	 	  		<p>
           	 	  			<input type="radio" name="perfil_comum" value="operador"
           	 	  			     <?php 
                                 if ($registro[1] == "operador") {
                                 	echo "checked";
                                   }
      	 	  			      ?>> Operador
      	 	  			      <input type="radio" name="perfil_comum" value="jornalista"
      	 	  			      <?php  
                                 if ($registro[1] == "jornalista") {
                                 	echo "checked";
                                    }
      	 	  			      ?>> Jornalista

           	 	  		</p>
           	 	  	 </td>
           	 	  </tr>

           	 	 <tr>
           	 	  	<td>
           	 	  		<p> Login: </p>
           	 	  	</td>
           	 	  <td>
           	 	  	<p> <?php echo "$registro[2]"; ?></p>
           	 	  </td>
           	 	 </tr>

           	 	 <tr>
           	 	 	<td>
           	 	 		<p> Senha: </p>
           	 	 	</td>
           	 	 <td>
           	 	     <p>
           	 	     <input type="password" name="senha"
           	 	                    value="<?php echo"$registro[3]"; ?>"required>
           	 	                    </p>	
           	 	  </td>
         	  </tr>
         	  <tr>
         	  	<td>
         	  		<p> Status: </p>
         	  	</td>
         	  	<td>
         	  		<p>
         	  			<select name="status">
         	  				<option value="a"
         	  				<?php 
                             if ($registro[4] == "a" )  {
                             	echo "selected";
                             }
         	  				?> > Ativo
         	  				<option value="i"
         	  				<?php 
                             if ($registro[4] == "i" ) {
                             	echo "selected";
                             }
         	  				?> > Inativo
         	  			</option>
                        </select>
         	  		</p>
         	  	</td>
         	  </tr>
              <tr>
              	<td>
              		<p> Foto: </p>
              	</td>
                <td>
                	<p> <input type="file" name="imagem"></p>
                </td>
              </tr>
              <tr>
              	<td colspan="2">
              		<p> <input type="submit" value="Alterar Usuário"> </p>
              	</td>
              </tr>
      <!-- Fim do formulario usuario-->
       </table>                                            	 

    <?php 
  } else {
   ?>
     <table class="centralizar">
     	<tr>
     		<td> 
     			<p> Nome: </p>
     		</td>
     		<td> 
     			<p> <?php echo "$registro[0]"; ?></p>
     		</td>
     	</tr>
     	<tr>
     		<td>
     			<p> Perfil: </p>
     		</td>
     		<td>
     			<p> <?php echo "$registro[1]"; ?></p>
     		</td>
     	</tr>
     	<tr>
     		<td>
     			<p> Login: </p>
     		</td>
     		<td>
     			<p> <?php echo "$registro[2]"; ?></p>
     		</td>
     	</tr>
     	<tr>
     		<td>
     			<p> Senha: </p>
     		</td>
     		<td>
     			<p> <input type="password" name="senha"
     				 value="<?php echo"$registro[3];" ?>" required> </p>
     		</td>
     	</tr>
     	<tr>
     		<td colspan="2">
     			<p> <input type="submit" value="Alterar usuario"> </p>
     		</td>
     	</tr>
 
     </table>
  


  <?php 
  }
   ?>

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