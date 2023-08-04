 
 <?php 
     $conectar = mysqli_connect("localhost","root","","vinicius_bd");
 $cod = $_POST["codigo"];
 $perfil = $_POST["perfil"];

 if ($perfil == "administrador") {
  $senha = $_POST["senha"];
  $sql_altera = "UPDATE usuarios SET senha_user='$senha' 
    						where cod_user = '$cod' ";

    $sql_resultado_alteracao = mysqli_query($conectar,$sql_altera);

    if ($sql_resultado_alteracao == true ) {
    	echo "<script> 
    			alert ('Senha do administrador alterado com sucesso')
    	      </script>";
    	 echo "<sript> 
    	         location.href = ('lista_user.php')
    	 </script>";     
    	exit();
    	} else {
    		echo "<script>
 					alert ('Ocorreu um erro. tente de novo ')
    		       </script>";
    		  echo "<script>
    		       location.href('lista_user.php')
    		       </script>";    

    	}	
 
}
 else {
   $nome= $_POST["nome"];
   $perfil_comum = $_POST["perfil_comum"];
    $senha = $_POST["senha"];
   $status = $_POST["status"];
   $foto = $_FILES["imagem"];
    
    $sql_pesguisa_foto = "SELECT usuarios 
     							imagem_user 
     						where cod_user='$cod'";

      $sql_resultado_foto = mysqli_query($conectar,$sql_pesguisa_foto);

      if ($foto["name"] <> "" ) {
      	$foto_nome = "img/".$foto["name"];
      	move_uploaded_file($foto["tmp_name"],$foto_nome);
      } 
      else {
      	$registro = mysqli_fetch_row($sql_resultado_foto);
      	$foto_nome = $registro[0];
      }

      $sql_altera = "UPDATE usuarios 
                    SET nome_user ='$nome',
                        perfil_comum ='$perfil_comum',
                        senha_user = '$senha',
                        status_user = '$status',
                        imagem_user = '$foto_nome'
                        WHERE cod_user = '$cod' ";

      $sql_resultado_alteracao = mysqli_query($conectar,$sql_altera);
      
      if ($sql_resultado_alteracao == true) {
      	echo "<script>
      			alert ('$nome Alterado com sucesso')
      				 </script>";
        echo "<script> 
        		location.href = ('alterar_inativar_usuarios.php')
        		</script>";	
        		exit();			 
                        	
        }  
        else {
		echo "<script> 
				alert ('Ocorreu um erro. tente de novo')
				</script>";
		echo "<script> 
                location.href('alterar_inativar_usuarios.php')
				</script>";
        }               

 }


?>