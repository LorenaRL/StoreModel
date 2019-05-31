<?php     
$nome_servidor = "localhost";     
$nome_usuario = "root";     
$senha = "";    
// Criar conexão 
    
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha);     
// Verificar Conexão     
if ($conecta->connect_error) 
    {         
        die("Conexão falhou: " . $conecta->connect_error."<br>");     
        
    }      
echo "Conexão realizada com sucesso <br>";     
// Cria banco de dados     
$sql = "CREATE DATABASE storemodel";     
if ($conecta->query($sql) === TRUE) {         
    echo "Banco de dados criado com sucesso<br>";     
    
} 
else {         
    echo "Erro na criação do banco de dados: " . $conecta->error."<br>";   
    }     
    $conecta->close();
?> 