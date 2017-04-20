<?php include_once("header.php");?>

<section>
	
	<form action="/ainda_vai_criar.php">

		<div id="cadastro-user" class="container">

			<br><br>
			<center>
				<div style="border-style: solid;
	     					border-color: #0000FF;
	     					border: 2px solid #A1A1A1;
	    					padding: 10px 40px; 
	    					background: #DDD;
	    					width: 300px;
	    					border-radius: 25px;">

					<h2> <strong> LOGIN <i class="fa fa-sign-in" aria-hidden="true"></i> </strong> </h2>
				</div>
			</center>
			<br>

		  	 <div class="form-group">
   				<label for="inputEmail"> Email address </label>
   				<div class="input-group">
   					<div class="input-group-addon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </div>
    				<input type="email" class="form-control" id="inputEmail1" placeholder="Email" autofocus style="width: 50%">
    			</div>
  			</div>

  			<div class="form-group">
    			<label for="inputPassword"> Senha </label>
    			<div class="input-group">
    				<div class="input-group-addon"> <i class="fa fa-key" aria-hidden="true"></i> </div>
    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="width: 50%">
    			</div>
  			</div>

		  	<button type="submit" class="btn btn-default"> Login </button>

		</div>

	</form>

</section>

<?php include_once("footer.php");?>

