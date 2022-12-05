<?php
 include_once("connect.php");
 $id = $_GET['id']; 
 try {
 $stmt = $conn->prepare("DELETE FROM funcionarios WHERE id=:id");
 $stmt->bindParam(":id",$id); 
 if($stmt->execute()){
 	echo "Registro deletado!"; 
 }
 }catch(Exception $e) {
 	echo "Erro de consulta ao BD: ".utf8_encode($e->getMessage());
 }
?> 