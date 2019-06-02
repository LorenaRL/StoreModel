<?php

    include('../conexaoCbancoCriado.php'); // Criar tabela
 $sql = "CREATE TABLE contato(
 id_cont INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 
 nome VARCHAR(40) NOT NULL,
 email VARCHAR(50) NOT NULL,
 assunto VARCHAR(50),
 
mensagem VARCHAR(130))";

 if ($conecta->query($sql) === TRUE) {
 echo "Tabela usuario criada com sucesso<br>";
 } else {
 echo "Erro na criação da tabela usuario: " . $conecta->error."<br>";
 }
 $conecta->close();
?>


