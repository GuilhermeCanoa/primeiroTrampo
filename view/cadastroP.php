<?php include_once("header.php");?>

<section>
	
	<form action="/ainda_vai_criar.php">

		<div id="cadastro-produto" class="container">

			<br><br>
			<center>
				<div style="border-style: solid;
	     					border-color: #0000FF;
	     					border: 2px solid #A1A1A1;
	    					padding: 10px 40px; 
	    					background: #DDD;
	    					width: 500px;
	    					border-radius: 25px;">

					<h2> <strong> CADASTRO DE PRODUTO <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </strong> </h2>
				</div>
			</center>
			<br>

		  	<div class="form-group">
		    	<label for="inputNomeProduto"> Nome </label>
		    	<div class="input-group">
		    		<div class="input-group-addon">@</div>
		    		<input type="text" class="form-control" id="inputNomeProduto" placeholder="Nome do produto" autofocus style="width: 50%">
		  		</div>
		  	</div>

		  	<div class="form-group">
	    		<label for="inputAmount"> Valor </label>
	    		<div class="input-group" style="position: relative;">
	      			<div class="input-group-addon"> <i class="fa fa-usd" aria-hidden="true"></i> </div>
	      			<input type="text" class="form-control" id="inputAmount" placeholder="Preço" style="width: 50%">
	    		</div>
	  		</div>

	  		<div class="form-group">
      			<label for="comment">Descrição:</label>
      			<textarea class="form-control" rows="5" id="comment"></textarea>
    		</div>

		  	<div class="form-group">
		    	<label for="inputFile"> File input </label>
		    	<input type="file" id="inputFile">
		    	<p class="help-block"> Selecione a imagem do produto. </p>
		  	</div>

		  	<button type="submit" class="btn btn-default"> Cadastrar </button>

		</div>

	</form>

</section>

<?php include_once("footer.php");?>

