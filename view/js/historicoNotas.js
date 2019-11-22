function historico(){
	var menu = document.getElementById('painel-secundario');
	menu.innerHTML = `
		<div id="draggable" class=class="ui-widget-content" style="padding-left: 1%; padding-top: 1%;">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Titulo do card</h5>
			    <p class="card-text">Descrição</p>
			    <div class="card-body">
		    		#HishTags
		  		</div>
			    <button type="button" class="btn btn-primary" onclick="">Ver anotação</button>
			  </div>
			</div>
		</div>
	`;
}