<?php

$nomeDoArquivo = $_FILES['arquivo']['name'];
$caminhoAtualArquivo = $_FILES['arquivo']['tmp_name'];
$caminhoSalvar= '../archives/'.$nomeDoArquivo;

if(move_uploaded_file($caminhoAtualArquivo, $caminhoSalvar)){
	echo "<script>
	alert('Arquivo Enviado!'); location= '../enviar.php';
	</script>";
}else{
    echo "<script>
	alert('Falha ao enviar o arquivo'); location= '../enviar.php';
	</script>";
}

?>