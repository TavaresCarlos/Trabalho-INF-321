<?php

	include '../controler/controler.php';
	include '../controler/conexao.php';

	class usuario{
		private $nome;
		private $email;
		private $senha;
		private $tipoUsuario;

		function construtorUsuario($name, $email, $password, $typeUser){
			$this->nome = $name;
			$this->email = $email;
			$this->senha = $password;
			$this->tipoUsuario = $typeUser;
		}
		function setNome($name){	
			$this->nome = $name;
		}
		function setEmail($email){
			$this->email = $email;
		}
		function setSenha($password){
			$this->senha = $password;
		}
		function setTipoUsuario($typeUser){
			$this->tipoUsuario = $typeUser;
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

		function construtorNotas($title, $category, $priority, $description){
			$this->titulo = $title;
			$this->categoria = $category;
			$this->prioridade = $priority;
			$this->descricao = $description;
		}
		function setTtitulo($title){
			$this->titulo = $title;
		}
		function setCategoria($category){
			$this->categoria = $category;
		}
		function setPrioridade($priority){
			$this->prioridade = $priority;
		}
		function setDescricao($description){
			$this->descricao = $description
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