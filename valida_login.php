<?php

	if (isset($_SESSION["login"])) {
		
		echo $_SESSION["login"];

	} else {
		
		echo "<script> alert ('Você não está logado!!!') </script>";
		echo "<script> location.href = ('acesso_restrito.php') </script>";

	}
	
?>