<?php 
#Iniciando a sessão
session_start();

#Conectando ao banco de dados
$conectar = mysqli_connect("localhost" , "root" , "" , "vinicius_bd");

#Pegando as variaveis da outra pagina
$manchete = $_POST["manchete"];
$resumo = $_POST["resumo"];
$texto = $_POST["texto"];
$categoria = $_POST["categoria"];
$imagem = $_FILES["imagem"];

#Recenbenco o codigo do usuario e atribuando a uma variavel
$codigo_user = $_SESSION["codigo_user"];

#Upload da imagem
$imagem_nome = "img/".$imagem["name"];

move_uploaded_file($imagem["tmp_name"], $imagem_nome);

#Inserindo Registro nas noticias
$sql_cadastrar = "INSERT INTO noticias 
(manchete_not, resumo_not,  texto_not, categoria_not, imagem_not, usuario_cod_user)
                            VALUES         
 ('$manchete', '$resumo', '$texto', '$categoria', '$imagem_nome','$codigo_user');";

  $sql_resultado_cadastrar = mysqli_query($conectar,$sql_cadastrar);

 
#Condição para saber se foi possivel cadastrar a noticia

 if ($sql_resultado_cadastrar == true) {
 	echo "<script>  
 	         alert ('$manchete cadastrada com sucesso')
 	        </script>";

 	     echo "<script>
 	              location.href = ('cadastro_noticias.php')
 	              </script>  ";
 	 }
 	 else {
 	 	echo "<script>
 	 	        alert ('Ocorreu um erro ao publicar a manchete tente de novo')
 	 	       </script>";
        echo "<script>
                  location.href = ('cadastro_noticias.php')
        </script>";

 	 }


?>