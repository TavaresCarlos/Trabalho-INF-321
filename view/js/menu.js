//Tela após o login do usuário
function acesso(){
	var menu = document.getElementById('menu');
	menu.innerHTML = `
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNav">
		    	<ul class="navbar-nav">
		      		<li class="nav-item active">
		        		<button type="button" class="btn btn-light" onlcik="">Home</button>
		      		</li>
		      		<li class="nav-item active">
		        		<button type="button" class="btn btn-light" onclick="">Nova nota</button>
		      		</li>
		      		<li class="nav-item active">
		        		<button type="button" class="btn btn-light" onclick="historico()">Histórico de notas</button>
		      		</li>
		      		<li class="nav-item active">
		        		<button type="button" class="btn btn-light" onclick="login()">Logout</button>
		      		</li>
		    	</ul>
		  	</div>
		</nav>
		<div id="painel-secundario">
		</div>
	`;
}
