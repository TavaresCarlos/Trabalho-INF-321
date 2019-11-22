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
						    <select class="form-control" id="sexo" name="sexo">
						    	<option value="null">---------</option>
						     	<option value="masculino">Masculino</option>
						     	<option value="feminino">Feminino</option>
						     	<option value="nao informado">Não informar</option>
			    			</select>
		    	</fieldset>
		    	<fieldset>
		    		<legend>Endereço</legend>
		    		<label for="exampleInputEmail1">Rua:</label>
			    			<input type="text" class="form-control" id="rua" name="rua" aria-describedby="emailHelp" placeholder="Rua" required>
			    	<label for="exampleInputEmail1">Bairro</label>
			    			<input type="text" class="form-control" id="bairro" name="bairro" aria-describedby="emailHelp" placeholder="Nome completo" required>
			    	<label for="exampleInputEmail1">Número</label>
			    			<input type="number" class="form-control" id="numero" name="numero" aria-describedby="emailHelp" placeholder="Número da residência" required>
			    	<label for="exampleFormControlSelect1">Estado:</label>
						    <select class="form-control" id="estado" name="estado">
						    	<option value="null">---------</option>
						     	<option value="">Opção 01</option>
						     	<option value="">Opção 02</option>
						     	<option value="">Opção 03</option>
			    			</select>
			    	<label for="exampleFormControlSelect1">Cidade:</label>
						    <select class="form-control" id="cidade" name="cidade">
						    	<option value="null">---------</option>
						     	<option value="">Opção 01</option>
						     	<option value="">Opção 02</option>
						     	<option value="">Opção 03</option>
			    			</select>
			    	<label for="exampleFormControlTextarea1">Complento:</label>
    					<textarea class="form-control" id="complemento" name="complemento" rows="3"></textarea>
			    	
		    	</fieldset>
		    	<fieldset>
		    		<legend>Contato</legend>
		    		<label for="exampleInputEmail1">Email</label>
			    			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
			    	<label for="exampleInputEmail1">Telefone</label>
			    			<input type="telephone" class="form-control" id="telefone" name="telefone" aria-describedby="emailHelp" placeholder="" required >
		    	</fieldset>
		    	<br>
		    	<button type="submit" class="btn btn-primary">Cadastrar</button>
				<button type="submit" class="btn btn-primary" onclick="home()">Voltar</button>
			</form>
		    </div>
		    <div class="col-xl-3">
		    </div>
		</div>
	`;
}