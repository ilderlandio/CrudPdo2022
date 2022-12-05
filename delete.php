<?php
 include_once("connect.php");

 try {
 	$stmt = $conn->prepare("SELECT * FROM funcionarios");
    $stmt->execute();
   echo "<table border='1'>";
   echo "<tr><th>id</th><th>Prof</th><th>Serv Gerais</th>
         <th>Gestão</th><th> E-mail </th> <th> Excluir </th> </tr>";  
    while($result = $stmt->fetch(PDO::FETCH_OBJ)) {// all table
    	    echo "<tr><td> $result->id </td> 
		              <td> $result->professor </td> 
		              <td> $result->servgerais </td>
		              <td> $result->gestao </td> 
		              <td> $result->email </td> 
		              <td> <a href='excluir.php?id=$result->id'>Excluir</a></td></tr>"; 
       } 
    echo "</table>";   
 } catch(Exception $e) {
 	echo "Erro de consulta ao BD: ".utf8_encode($e->getMessage());
 }
?> 