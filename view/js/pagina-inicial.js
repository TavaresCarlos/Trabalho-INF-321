function home(){
	var menu = document.getElementById("menu");
	menu.innerHTML =`
		<div class="container">
		  <div class="row">
		    <div class="col-xl-3">
		    </div>
		    <div class="col-xl-6">
		      <p>BEM-VINDO A <strong>AGENDA C&H</strong>, SUA FÁCIL, RÁPIDA E CUSTOMIZÁVEL AGENDA PESSOAL.</p>
		      <p>SE VOCÊ JÁ É UM DOS NOSSOS PARCEIROS, CLIQUE<button type="button" class="btn btn-link" onclick="login()">AQUI</button></p>
		      <p>SENÃO, EFETUE UM CADASTRO RÁPIDO E FÁCIL CLICANDO<button type="button" class="btn btn-link" onclick="cadastro()">AQUI</button></p>
		    </div>
		    <div class="col-xl-3">
		    </div>
		  </div>
		</div>
	`;
}