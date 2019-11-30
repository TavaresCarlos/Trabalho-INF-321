<?php

	class conexao{
		public function abrindo_conexao(){
			$host = "localhost";
			$user = "root";
			$pass = "";
			$bd = "";
			$conexao = mysqli_connect($host, $user, $pass, $bd) or die(mysqli_connect_error());
		}
		public function fechando_conexao(){
			mysqli_close($conexao);
		}
		
	}

?>