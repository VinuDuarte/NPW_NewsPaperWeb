<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title> Home </title>

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

                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="lista_noticias.php?categoria=hardware">Hardware</a></li>
                        <li><a href="lista_noticias.php?categoria=software">Software</a></li> 

                    </ul> 

				</div>

			</div>

			<div id="conteudo_especifico">
				<?php 
                      #Mostrando a ultima noticia cadastrada
                      $conectar = mysqli_connect("localhost", "root" , "" , "vinicius_bd");

               #Fazendo uma verificação da ultima noticia cadastrada
                 $sql_pesquisa_noticias = 
                      "SELECT 
                         manchete_not,resumo_not,texto_not, imagem_not,cod_not
                         FROM noticias 
                         ORDER BY cod_not DESC limit 1"; 

           $resultado_pesquisa_noticias= mysqli_query ($conectar,$sql_pesquisa_noticias);
           
           #extrair os dados do banco
           $registro_noticia=mysqli_fetch_row($resultado_pesquisa_noticias);              
               
               ?>
				


<div class="div_central">
<?php #DIV PARA MOSTRAR O CONTEUDO DA NOTICIA ;?>
       <table>
           <tr>
              <td>
             	<img src="<?php echo "$registro_noticia[3]";  ?>">
                      
                </td>   	
         <td>
              <h2> <?php echo "$registro_noticia[0]"; ?></h2>
               <h3> <?php echo "$registro_noticia[1]";  ?></h3>
                <?php $texto = substr($registro_noticia[2], 0,130);?>
                 
                 <p> <?php echo "$texto";?> 

                 <a href="exibe_noticia.php?codigo=<?php echo $registro_noticia[4];?>">
                  Leia mais... 
                  
                  </a>
                 </p>
          </td>
                      
                          </tr>	
             

              </table>
				      	

					
				</div>			
				
				<?php   $sql_pesquisa_noticias = 
                      "SELECT 
                         manchete_not,resumo_not,texto_not, imagem_not,cod_not
                         FROM noticias 
                         ORDER BY cod_not DESC LIMIT 1"; 

           $resultado_pesquisa_noticias= mysqli_query ($conectar,$sql_pesquisa_noticias);
           
           #extrair os dados do banco
           $registro_noticia=mysqli_fetch_row($resultado_pesquisa_noticias);              
             
               ?>

				<div class="div_esquerda">
                 <table>
           <tr>
              <td>
             	<img src="<?php echo "$registro_noticia[3]";  ?>">
            </td> 

            <td>
            	<h2> <?php echo "$registro_noticia[0]"; ?></h2>
            </td>  	
           </tr>
            <tr>
            	<td colspan="2">
            		<h3> <?php echo "$registro_noticia[1]";  ?></h3>
            		<?php $texto = substr($registro_noticia[2], 0, 125) ?>
            
                <p> <?php echo "$texto";?> 

                 <a href="exibe_noticia.php?codigo=<?php echo $registro_noticia[4];?>">
                  Leia mais... 
                  
                  </a>
                 </p>
            	</td>
            </tr>	
             
              </table>
			</div>

			<?php   $sql_pesquisa_noticias = 
                      "SELECT 
                         manchete_not,resumo_not,texto_not, imagem_not,cod_not
                         FROM noticias 
                         ORDER BY cod_not DESC LIMIT 1"; 

           $resultado_pesquisa_noticias= mysqli_query ($conectar,$sql_pesquisa_noticias);
           
           #extrair os dados do banco
           $registro_noticia=mysqli_fetch_row($resultado_pesquisa_noticias);              
             
               ?>				
				
				<div class="div_direita">
                      <table>
           <tr>
              <td>
             	<img src="<?php echo "$registro_noticia[3]";  ?>">
            </td> 

            <td>
            	<h2> <?php echo "$registro_noticia[0]"; ?></h2>
            </td>  	
           </tr>
            <tr>
            	<td colspan="2">
            		<h3> <?php echo "$registro_noticia[1]";  ?></h3>
            		<?php $texto = substr($registro_noticia[2], 0, 125) ?>
            		 <p> <?php echo "$texto";?> 

                 <a href="exibe_noticia.php?codigo=<?php echo $registro_noticia[4];?>">
                  Leia mais... 
                  
                  </a>
                 </p>
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

		