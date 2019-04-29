<?php
 $nome_servidor = "localhost";
 $nome_usuario = "root";
 $senha = "123456";
 // Criar conexão
 $conecta = new mysqli($nome_servidor, $nome_usuario, $senha);
 // Verificar Conexão
 if ($conecta->connect_error) {
 die("Conexão falhou: " . $conecta->connect_error."<br>");
 }
 echo "Conexão realizada com sucesso";
 $conecta->close();
?>
