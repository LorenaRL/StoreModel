<?php
 $nome_servidor = "localhost";
 $nome_usuario = "root";
 $senha = "123456";
 $nome_banco = "StoreModel";
 // Criar conexão
 $conecta = new mysqli($nome_servidor, $nome_usuario, $senha,$nome_banco);
 // Verificar Conexão
 if ($conecta->connect_error) {
 die("Conexão falhou: " . $conecta->connect_error."<br>");
 }
 echo "Conexão realizada com sucesso <br>";
 // Criar tabela
 $sql = "CREATE TABLE login(
 id_login INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 
 email VARCHAR(50) NOT NULL,

 senha varbinary(255) NOT NULL)";

 if ($conecta->query($sql) === TRUE) {
 echo "Tabela login criada com sucesso<br>";
 } else {
 echo "Erro na criação da tabela login: " . $conecta->error."<br>";
 }
 $conecta->close();
?>
