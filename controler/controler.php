<?php

	include '../model/model.php';

	class controler{
		function login(){
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$usuario = new usuario();
			$usuario->login($email, $senha);
		}
		function cadastroNovoUsuario(){
			$nome =  $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$tipoUsuario = "default";

			$usuario = new usuario();

			$usuario->construtorUsuario($nome, $email, $senha, $tipoUsuario);
			$usuario->inserindoNovoUsuario();
		}
		function cadastroNovaNota(){
			session_start();

			if((!isset($_SESSION['email'])) && (!isset($_SESSION['senha'])) && (!isset($_SESSION['nome']))){
				header('refresh: 0.01; ../view/index.html');
			}

			$titulo =  $_POST['titulo'];
			$categoria =  $_POST['categoria'];
			$prioridade =  $_POST['prioridade'];
			$descricao =  $_POST['descricao'];
			$data = date("y/m/d");
			$status = "aberto"; 
			$usuarioProprietario = implode($_SESSION['nome']);

			$notas = new notas();

			$notas->construtorNotas($titulo, $categoria, $prioridade, $descricao, $data, $status, $usuarioProprietario);
			$notas->inserindoNovaNota();
		}
		function novaSenha(){

		}
		function alterarNota(){
			
		}
	}

?>