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
      		<div class="col-sm-4">
      			<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd">
					</div>
      		</div>
      	</div>	
      	<div class="row">
				<div class="col-sm-6">
					  <div class="form-group">
					    <label for="nome">Nome:</label>
					    <input type="text" class="form-control" id="nome">
					  </div>
      		</div>
      		<div class="col-sm-3">
      			<div class="form-group">
					    <label for="dataNascimento">Data Nascimento:</label>
					    <input type="date" class="form-control" id="dataNascimento">
					  </div>
      		</div>
      		<div class="col-sm-3">
      			<div class="form-group">
					    <label for="cpf">CPF:</label>
					    <input type="text" class="form-control" id="cpf">
					  </div>
      		</div>
      	</div>	
      	<div class="row">
				<div class="col-sm-6">
			 		<button type="submit" class="btn btn-primary">Gravar</button>
      	 		<button type="reset" class="btn btn-success">Submit</button>		
      	 	</div>
      	</div>
      	<div class="row">
				<div class="col-sm-6">
				&nbsp;
				</div>
		</div>	     	
    </div>
  </div>
</div>
<?php
	include_once("footer.php");
?>