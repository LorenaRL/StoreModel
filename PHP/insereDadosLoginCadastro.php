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

 // Inserir vários registros 
 $sql = "INSERT INTO usuario(id_login,nome, email,senha, senhaRepete)    
          VALUES ('2019000','Junior Abraão Canis','junior@projecao.br','test','test');";   
 $sql .= "INSERT INTO usuario( nome,email,senha, senhaRepete)     
          VALUES ( 'Juliete Caneiro Luz', 'julie@gmail.com','123456789','123456789')";     
 if ($conecta->multi_query($sql) === TRUE) {        
     echo "Novos registros criados com sucesso<br>";     
     
 } else {         
 echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";    }
 
$conecta->close(); 
?> 