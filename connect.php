<?php 
$bank = "crudphp2022";
$host = "127.0.0.1";
$user_bd = "root"; 
$pass_bd = "";
$charset = "utf8";

// $bank = "info2021_ismael";
// $host = "localhost";
// $user_bd = "info2021_ismael1"; 
// $pass_bd = "Ismael10";
// $charset = "utf8";

$config = "mysql:dbname=$bank;";
$config .= "host=$host;";
$config .= "charset=$charset";

try{
    $conn = new PDO($config,$user_bd,$pass_bd); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
} catch(PDOException $e) {
    echo "Erro de conexão com BD: ".utf8_encode($e->getMessage());
} 
