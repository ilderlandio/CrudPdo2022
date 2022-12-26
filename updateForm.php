<?php
 include_once("connect.php");

 $id = $_GET['id']; 

 try {
   $stmt = $conn->prepare("SELECT * FROM funcionarios WHERE id=:id");
   $stmt->bindParam(":id",$id);
   $stmt->execute();
   
   $result = $stmt->fetch(PDO::FETCH_OBJ); 

    // echo "<tr><td> $result->id </td> 
    //           <td> $result->professor </td> 
    //           <td> $result->servgerais </td>
    //           <td> $result->gestao </td> 
    //           <td> $result->email </td> 
 } catch(Exception $e) {
   echo "Erro de consulta ao BD: ".utf8_encode($e->getMessage());
 }
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Update </title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  
  <style type="text/css">
    .input-group-lg{
      margin-top: 1em;
      margin-bottom: 1em;
    }
  </style>
</head>
<body>
<header> <h2> Atualizar Informações  </h2> </header>
<hr>
<section>
  <div class="container">
   <form method="post" action="setUptdate.php">
  <div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Professor</span>
  <input type="text" name="prof" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="<?=$result->professor; ?>">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Serviços Gerais</span>
  <input type="text" name="servGerais" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="<?=$result->servgerais; ?>">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Gestão </span>
  <input type="text" name="gestao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="<?=$result->gestao;?>">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">E-mail </span>
  <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="<?=$result->email;?>">
</div>
  <div>
    <input type="hidden" name="id" value="<?=$id ?> ">
  </div>
    <button type="submit" class="btn btn-primary"> Atualizar </button>
      </form>
  </div>
</section>
<hr>
<footer>
  EEEP Amélia - 2022 - <a href="index.php"> Home </a>
</footer>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>