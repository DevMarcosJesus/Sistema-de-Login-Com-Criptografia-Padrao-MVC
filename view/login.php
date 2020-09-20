<!DOCTYPE html>
<html>
<head>
	<title>Sistema Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
</head>
<body class="fundo">

<!-- Init of Bootstrap -->

<div class="container">
	
	<div class="formulario-title">
		<h1> BEM VINDO</h1><br><br>

		<!-- Form for Login -->
		<form method="POST" class="log" action="controller/loginController.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>


			<!-- Copyright Marcos Jesus -->

			<p class="cpcolor" id="credits">&copy; Marcos Jesus - <?php echo date("Y"); ?> - Todos os direitos Reservados</p>
		

	</div>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>