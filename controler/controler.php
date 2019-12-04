<?php

	include '../model/model.php';

	class controler{
		function login(){

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

		}
		function novaSenha(){

		}
		function alterarNota(){
			
		}
	}

?>