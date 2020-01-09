Vue.component('tela-principal',{
	props:{
		texto: String
	},
	template:`
		<nav class="navbar navbar-expand-lg" id="menu-superior">
	    	<div class="col-sm-1">
				<a class="navbar-brand" href="#">{{texto.icone}}</a>
			</div>
			<div class="col-sm-10">
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
                <!--Botao de cadastro com modal-->
                <button type="button"  class="btn btn-link" id="cadastro" data-toggle="modal" data-target="#myModal">{{texto.cadastro}}</button>
			</div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-light" id="botao-login" data-toggle="modal" data-target="#myModal2">{{texto.login}}</button>
            </div>
		</nav>
	`
})

new Vue({
	el:'#menu',
	data:{
		menu:[
			{id: 1, icone: 'Trust Note', cadastro: 'Sign up to Trust Note', login: 'Login'}
		]
	}
})