function login(){
	var menu = document.getElementById("menu");
	menu.innerHTML = `	
		<div class="container" id="draggable">
			<form method="POST" action="">
			 <div class = row>
			 	<div class="col-xl-4" id="left">
			 	</div>
			 	<div id="login" class="col-xl-4">
			 		<div class="form-group">
					    <label for="exampleInputEmail1">Email:</label>
					    <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Email di usuário">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Senha:</label>
					    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
					    <small id="emailHelp" class="form-text text-muted">Mantenha em segurança seu login e senha</small>
					</div>
					<button type="submit" class="btn btn-primary">Entrar</button>
					<button type="submit" class="btn btn-primary" onclick="home()">Voltar</button>
					<br><br>
			 	</div>
			 	<div class="col-xl-4" id="left">
			 	</div>
			 </div>
		</form>
	</div>
	`;
}
