<?php 
	session_start();//meio de acessar a variável global.
	if (isset($_SESSION['login'])) {
		$user = $_SESSION['login'];
	} else {
		session_destroy();
		header("location: ../index.php?msg=Acesso negado");
	}

 ?>