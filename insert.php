<?php 
 include_once("connect.php");

 $prof = $_POST['prof']; 
 $servGerais = $_POST['servGerais']; 
 $gestao = $_POST['gestao']; 
 $email = $_POST['email']; 

 echo "Prof:{$prof} - Serviços Gerais: {$servGerais}
      - Gestão:{$gestao} - E-mail:{$email}"; 

$id = 0; 

$stmt = $conn->prepare("INSERT INTO funcionarios VALUES(:id,:prof,:servG,:gestao,:email)");

$stmt->bindParam(":id",$id); 
$stmt->bindParam(":prof",$prof); 
$stmt->bindParam(":servG",$servGerais); 
$stmt->bindParam(":gestao",$gestao); 
$stmt->bindParam(":email",$email); 

if($stmt->execute()){
     echo "<br> Dados inseridos com sucesso!"; 
} 

?> 