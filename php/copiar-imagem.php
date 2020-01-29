<?php

	$arquivo = @$_FILES['imagem']['name']; 
	$caminho_imagem = "view/img/perfil-usuarios/";

	if(!move_uploaded_file($arquivo, $caminho_imagem.$arquivo)){
		echo("nao foi<br>");
	}
	var_dump($_FILES)
?>