Vue.component('modal',{
	props:{
		id: String
	},
	template:`
		<div class="nav-item active">
            <div class="modal fade" id="{{id}}" role="dialog">
	            <div class="modal-dialog">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <h3 id="titulo-modal">Cadastro Trust Note</h3>
	                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	                            <span aria-hidden="true">&times;</span>
	                        </button>
	                    </div>
	                    <div class="modal-body">

	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	`
})

new Vue({
	el:'#menu',
	data:{
		login:`
			Teste
			<form method="POST" action="../php/redirecionamento-login.php" id="login">
                <label for="">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="" required>
                        <label for="">Senha:</label>
                            input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
                            <br>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <button type="submit" class="btn btn-primary">Recuperar senha</button>
            </form>
		`
	}
})