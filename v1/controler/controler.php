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
			$imagem = $_POST['imagem-perfil'];
			$tipoUsuario = "default";

			$usuario = new usuario();

			$usuario->construtorUsuario($nome, $email, $senha, $imagem, $tipoUsuario);
			$usuario->inserindoNovoUsuario();

		}
		function cadastroNovaNota(){

			$titulo =  $_POST['titulo'];
			$categoria =  $_POST['categoria'];
			$prioridade =  $_POST['prioridade'];
			$descricao =  $_POST['descricao'];
			$data = date("y/m/d");
			$status = $_POST['status'];

			$notas = new notas();

			session_start();
			$usuarioProprietario = implode($_SESSION['nome']);

			$notas->construtorNotas($titulo, $categoria, $prioridade, $descricao, $data, $status, $usuarioProprietario);
			$notas->inserindoNovaNota();
		}
		function novaSenha(){
			session_start();

			if((!isset($_SESSION['email'])) && (!isset($_SESSION['senha'])) && (!isset($_SESSION['nome']))){
				header('refresh: 0.01; ../view/index.html');
			}

			$novaSenha = $_POST['novaSenha'];
			
			$usuario = new usuario();

			$usuario->setSenha($novaSenha);
			$usuario->alterandoSenha($novaSenha);

			print_r(session_save_path());
		}
		function compartilhar(){
			$idNota = $_GET['idNota'];
			$idUsuarioCompartilhado = $_GET['idUsuarioCompartilhado'];

			$compartilhar = new compartilhar();
			session_start();

			$compartilhar->setNota($idNota);
			$compartilhar->setUsuario($idUsuarioCompartilhado);
			$compartilhar->setCompartilhamento();	
		}
	}

?>