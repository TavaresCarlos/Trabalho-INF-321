<?php
	
	include 'conexao.php';

	class usuario{
		private $nome;
		private $email;
		private $senha;
		private $tipoUsuario;

		function construtorUsuario($nome, $email, $senha, $tipoUsuario){
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
			$this->tipoUsuario = $tipoUsuario;
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
			$this->tipoUsuario = "default";
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
		function inserindoNovoUsuario(){
			$conect = new conexao();

			$conect->abrindo_conexao();

			$sql = "INSERT INTO usuario (tipoUsuario, email, nome, senha) VALUES ('$this->tipoUsuario', '$this->email', '$this->nome', '$this->senha')";
			$resposta = mysqli_query($conect->getConexao(), $sql);

			print_r($resposta);

			$conect->fechando_conexao();
			echo('<script>alert("Cadastro realizado com sucesso. Efetue o login no sistema.");</script>');
			header('refresh: 0.01; ../view/index.html');
		}
		function inserindoNovaNota(){

		}
	}

	class notas{
		private $titulo;
		private $categoria;
		private $prioridade;
		private $descricao;

		function construtorNotas(){
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
			return $descricao;
		}

		//Funções para persistência no banco de dados
	}

?>