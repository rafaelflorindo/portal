<?php
	include_once("header.php");
?>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-2">
      <?php
      	include_once("permissoes.php");
      ?>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-10">
    		<div class="row">
				<div class="col-sm-12">
      			<h2>Cadastro de Usuários</h2>
      			<p>Página para cadastrar os usuários do portal! </p>
      		</div>
      	</div>	
      	<div class="row">
				<div class="col-sm-6">
      			<form action="/action_page.php">
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email">
					  </div>
      		</div>
      		<div class="col-sm-6">
      			<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd">
					  </div>
      		</div>
      	</div>	
      	<div class="row">
				<div class="col-sm-4	">
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email">
					  </div>
      		</div>
      		<div class="col-sm-6">
      			<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd">
					  </div>
      		</div>
      	</div>	
      	 <button type="submit" class="btn btn-primary">Submit</button>
      	  <button type="submit" class="btn btn-success">Submit</button>			     	
    </div>
  </div>
</div>
<?php
	include_once("footer.php");
?>