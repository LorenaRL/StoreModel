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

 // Inserir vários registros 
 $sql = "INSERT INTO login(id_login, email,senha)    "
         . "  VALUES ('2019000','junior@projecao.br','test');";    
 $sql .= "INSERT INTO login( email,senha)     "
         . " VALUES (  'julie@gmail.com','123456789')";     
 if ($conecta->multi_query($sql) === TRUE) {        
     echo "Novos registros criados com sucesso<br>";     
     
 } else {         
 echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";    }
 
$conecta->close(); 
?> 