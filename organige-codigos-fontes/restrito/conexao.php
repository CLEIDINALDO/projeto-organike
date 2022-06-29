<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$bd = "empresa";

	if ($conn = mysqli_connect($servername, $username,  $password, $bd)) {
		//echo "Conectado.";
	} else
		echo "Erro.";
		

	function mensagem($texto, $tipo) {
		echo "<div class='alert alert-$tipo' role='alert'>
			  	$texto
			  </div>";
	}
	
    function mostra_data($data) {
        $d = explode('-', $data);
        $escreve = $d[2] ."-" .$d[1] ."-" .$d[0];
        return $escreve;
    }

	function mover_foto($vetor_foto) {//função para receber e mudar o nome da foto conforme instant de envio evitando iguais.
		$vtipo = explode("/", $vetor_foto['type']);//verificador de imagens
		$tipo = $vtipo[0] ?? '';
		$extensao = "." .$vtipo[1] ?? '';
		if ( (!$vetor_foto['error']) and ($vetor_foto['size'] <= 500000) and ($tipo == "image")) {//< que 500 kilobytes.
			$nome_arquivo = date('Ymdhms') .$extensao;
			move_uploaded_file($vetor_foto['tmp_name'], "img/".$nome_arquivo);
			return $nome_arquivo;
		} else {
			return 0;
		}
	}
	
	function clear($conexao, $texto_puro) {
		$texto = mysqli_real_escape_string($conexao, $texto_puro);
		$texto = htmlspecialchars_decode($texto);
		return $texto;
	}
?>