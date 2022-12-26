<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Cadastro </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
	<style type="text/css">
		.input-group-lg{
			margin-top: 1em;
			margin-bottom: 1em;
		}
	</style>
</head>
<body>
<header> <h2> Formulário de Cadastro </h2> </header>
<section>
	<div class="container">
   <form method="post" action="insert.php">
  <div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Professor</span>
  <input type="text" name="prof" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Serviços Gerais</span>
  <input type="text" name="servGerais" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Gestão </span>
  <input type="text" name="gestao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">E-mail </span>
  <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
	</div>
</section>
<footer>
	EEEP Amélia - 2022 - <a href="index.php"> Home </a>
</footer>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>