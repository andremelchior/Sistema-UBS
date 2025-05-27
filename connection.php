<?php

$host = 'localhost';
$dbname = 'ubs';
$user = 'root';
$password = 'root';

try {
  // DSN Data Source Name
  // Definir Tipo do Banco, Host e DB Name
  $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

  // Cria a Instancia PDO 
  $conn = new PDO($dsn,$user,$password);
  echo "Conexão com o banco de dados foi bem sucedida! <hr>";
  }catch(PDOException $e){
  // Captura Erro de Conexão e encerra o Script com Mensagem

  die("Erro na Conexão" . $e->getMessage());

}

?>
