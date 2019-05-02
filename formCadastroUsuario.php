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
      	<h2>Cadastro de Usuários</h2>
      	<p>Página para cadastrar os usuários do portal!</p>
			<div class="row">
				<div class="col-sm-12">
					 <form action="/action_page.php">
						  <div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" id="email">
						  </div>
						  <div class="form-group">
						    <label for="pwd">Password:</label>
						    <input type="password" class="form-control" id="pwd">
						  </div>
						  <div class="form-group form-check">
						    <label class="form-check-label">
						      <input class="form-check-input" type="checkbox"> Remember me
						    </label>
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form> 
				</div>			
			</div>      	
    </div>
  </div>
</div>
<?php
	include_once("footer.php");
?>