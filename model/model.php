<?php

	include '../controler/controler.php';
	include '../controler/conexao.php';

	class usuario{
		private $nome;
		private $email;
		private $senha;
		private $tipoUsuario;

		function construtorUsuario($_POST['nome'], $_POST['email'], $_POST['senha']){
			$this->nome = $_POST['nome'];
			$this->email = $_POST['email'];
			$this->senha = $_POST['senha'];
			$this->tipoUsuario = "default";
		}
		function setNome(){	
			$this->nome = $_POST['nome'];
		}
		function setEmail(){
			$this->email = $_POST['email'];
		}
		function setSenha(){
			$this->senha = $_POST['senha'];
		}
		function setTipoUsuario(){
			$this->tipoUsuario = "default"
		}
		function getNome(){
			return $nome;
		}
		function getEmail(){
			return $email;
		}
		function getSenha(){
			return $senha;
		}
		function getTipoUsuario(){
			return $tipoUsuario;
		}

		//Funções para persistência no banco de dados
	}

	class notas{
		private $titulo;
		private $categoria;
		private $prioridade;
		private $descricao;

		function construtorNotas($_POST['titulo'], $_POST['categoria'], $_POST['prioridade'], $_POST['descricao']){
			$this->titulo = $_POST['titulo'];
			$this->categoria = $_POST['categoria'];
			$this->prioridade = $_POST['prioridade'];
			$this->descricao = $_POST['descricao'];
		}
		function setTtitulo(){
			$this->titulo = $_POST['titulo'];
		}
		function setCategoria(){
			$this->categoria = $_POST['categoria'];
		}
		function setPrioridade(){
			$this->prioridade = $_POST['prioridade'];
		}
		function setDescricao(){
			$this->descricao = $_POST['descricao'];
		}
		function getTtitulo(){
			return $titulo;
		}
		function getCategoria(){
			return $categoria;
		}
		function getPrioridade(){
			return $prioridade;
		}
		function getDescricao(){
			return $descricao
		}

		//Funções para persistência no banco de dados
	}

?>