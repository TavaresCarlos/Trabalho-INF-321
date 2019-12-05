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
		function setNome($nome){	
			$this->nome = $nome;
		}
		function setEmail($email){
			$this->email = $email;
		}
		function setSenha($senha){
			$this->senha = $senha;
		}
		function setTipoUsuario($tipoUsuario){
			$this->tipoUsuario = $tipoUsuario;
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

			$conect->fechando_conexao();
			echo('<script>alert("Cadastro realizado com sucesso. Efetue o login no sistema.");</script>');
			header('refresh: 0.01; ../view/index.html');
		}
		function login($email, $senha){
			$conect = new conexao();

			$conect->abrindo_conexao();

			$sql = "SELECT nome FROM usuario WHERE email = '$email' AND senha = '$senha'";
			$resposta = mysqli_query($conect->getConexao(), $sql);
			$resultado = mysqli_fetch_assoc($resposta);

			//Recuperando o tipo do usuário
			$sql2 = "SELECT tipoUsuario FROM usuario WHERE email = '$email' AND senha = '$senha'";
			$resposta2 = mysqli_query($conect->getConexao(), $sql2);
			$resultado2 = mysqli_fetch_assoc($resposta2);
			
			$tipoUsuario = implode($resultado2);

			//Cria a sessão
			session_start();
			
			$_SESSION['email'] = $email;
			$_SESSION['senha'] = $senha;
			$_SESSION['nome'] = $resultado;

			if($tipoUsuario == "default")
				header('refresh: 0.01; ../view/home.html');
			if($tipoUsuario == "administrador")
				header('refresh: 0.01; ../view/index-admin.html');

			$conect->fechando_conexao();
		}
		function alterandoSenha($novaSenha){
			$conect = new conexao();

			$conect->abrindo_conexao();

			$nome = implode($_SESSION['nome']);

			$sql = "UPDATE usuario SET senha = '$novaSenha' WHERE nome = '$nome'";

			$resposta = mysqli_query($conect->getConexao(), $sql);
			header('refresh: 0.01; ../view/home.html');

			$conect->fechando_conexao();
		}
	}

	class notas{
		private $titulo;
		private $categoria;
		private $prioridade;
		private $descricao;

		private $data;
		private $status;

		private $usuarioProprietario;

		function construtorNotas($titulo, $categoria, $prioridade, $descricao, $data, $status, $usuarioProprietario){
			$this->titulo = $titulo;
			$this->categoria = $categoria;
			$this->prioridade = $prioridade;
			$this->descricao = $descricao;
			$this->data = $data;
			$this->status = $status;
			$this->usuarioProprietario = $usuarioProprietario;
		}
		function setTtitulo($titulo){
			$this->titulo = $titulo;
		}
		function setCategoria($categoria){
			$this->categoria = $categoria;
		}
		function setPrioridade($prioridade){
			$this->prioridade = $prioridade;
		}
		function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		function setData($data){
			$this->data = $data; 
		}
		function setStatus($status){
			$this->status = $status;
		}
		function setUsuarioProprietario($usuarioProprietario){
			$this->usuarioProprietario = $usuarioProprietario;
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
		function getData(){
			return $data;
		}
		function getStatus(){
			return $status;
		}
		function getUsuariousuarioProprietario(){
			return $usuarioProprietario;
		}


		//Funções para persistência no banco de dados
		function inserindoNovaNota(){
			$conect = new conexao();

			$conect->abrindo_conexao();

			$sql = "INSERT INTO nota (descricao, data, subtitulo, titulo, status, prioridade, usuarioProprietario) VALUES ('$this->descricao', '$this->data', '$this->categoria', '$this->titulo', '$this->status', '$this->prioridade', '$this->usuarioProprietario')";

			$resposta = mysqli_query($conect->getConexao(), $sql);
		
			$conect->fechando_conexao();	
			
			header('refresh: 0.01; ../view/home.html');
		}
	}

?>