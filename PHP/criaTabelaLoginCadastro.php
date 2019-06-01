<?php
 $nome_servidor = "localhost";
 $nome_usuario = "root";
 $senha = "";
 $nome_banco = "storemodel";
 // Criar conexão
 $conecta = new mysqli($nome_servidor, $nome_usuario, $senha,$nome_banco);
 // Verificar Conexão
 if ($conecta->connect_error) {
 die("Conexão falhou: " . $conecta->connect_error."<br>");
 }
 echo "Conexão realizada com sucesso <br>";
 // Criar tabela
 $sql = "CREATE TABLE usuario(
 id_login INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 
 nome VARCHAR(50) NOT NULL,
 email VARCHAR(50) NOT NULL,

 senha varbinary(255) NOT NULL,
 senhaRepete varbinary(255) NOT NULL)";

 if ($conecta->query($sql) === TRUE) {
 echo "Tabela usuario criada com sucesso<br>";
 } else {
 echo "Erro na criação da tabela usuario: " . $conecta->error."<br>";
 }
 $conecta->close();
?>
