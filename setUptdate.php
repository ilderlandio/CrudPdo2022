<?php
include_once("connect.php");

extract($_POST); 

// echo "Prof:{$prof} - SerG:{$servGerais} - Gestão:{$gestao} - E-mail:{$email} - id:{$id}";

 try {
   $stmt = $conn->prepare("UPDATE funcionarios SET professor=:prof, servgerais=:serG, gestao=:gestao, email=:email WHERE id=:id");

   $stmt->bindParam(":id",$id);
   $stmt->bindParam(":prof",$prof);
   $stmt->bindParam(":serG",$servGerais);
   $stmt->bindParam(":gestao",$gestao);
   $stmt->bindParam(":email",$email);
   if($stmt->execute()){
   	echo "Dados Atualizados! <br>"; 
   	echo "<a href=index.php> home </a>"; 
   }

 } catch(Exception $e) {
   echo "Erro de consulta ao BD: ".utf8_encode($e->getMessage());
 } 
