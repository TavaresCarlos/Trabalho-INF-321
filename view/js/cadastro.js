function cadastro(){
	var cadastro = document.getElementById("menu");
	cadastro.innerHTML = `
		<div class="row">
			<div class="col-xl-3">
		    </div>
		    <div class="col-xl-6">
		      <form method="POST" action="" id="formulario-cadastro">
				<fieldset>
					<legend>Dados cadastrais</legend>
						<label for="exampleInputEmail1">Nome completo</label>
			    			<input type="text" class="form-control" id="nome" name="name" aria-describedby="emailHelp" placeholder="Nome completo" required>
			    		<label for="exampleFormControlSelect1">Sexo</label>
						    <select class="form-control" id="exampleFormControlSelect1">
						    	<option value="null">---------</option>
						     	<option value="masculino">Masculino</option>
						     	<option value="feminino">Feminino</option>
						     	<option value="nao informado">Não informar</option>
			    			</select>
		    	</fieldset>
		    	<fieldset>
		    		<legend>Endereço</legend>
		    	</fieldset>
		    	<fieldset>
		    		<legend>Contato</legend>
		    	</fieldset>
		    	<button type="submit" class="btn btn-primary">Cadastrar</button>
				<button type="submit" class="btn btn-primary" onclick="home()">Voltar</button>
			</form>
		    </div>
		    <div class="col-xl-3">
		    </div>
		</div>
	`;
}