<?php
	include '../model/conexao.php';

    $conect = new conexao();
    $conect->abrindo_conexao();

    session_start();
    
    if((!isset($_SESSION['email'])) && (!isset($_SESSION['senha'])) && (!isset($_SESSION['nome']))){
        header('refresh: 0.01; ../view/index.html');
    }

	$idNota = $_GET['idNota'];

	$sql = "DELETE FROM nota WHERE idNota = '$idNota'";
	$resposta = mysqli_query($conect->getConexao(), $sql);

	$conect->fechando_conexao();
	
	header('refresh: 0.01; ../view/historico.php');
?>