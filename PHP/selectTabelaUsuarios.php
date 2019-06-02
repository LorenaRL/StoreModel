<?php
    session_start();
    include('./conexaoCbancoCriado.php');
    
    //select
    $sql = "SELECT id_login, nome, email, senha FROM usuario";
    $resultado = $conecta->query($sql);
    if ($resultado->num_rows > 0) {

    // saída dos dados
    while($linha = $resultado->fetch_assoc()) {
    echo "ID: " . $linha["id_login"]. "      NOME: " . $linha["nome"]. "       E-MAIL: " . $linha["email"]."SENHA: " . $linha["senha"]. "<br>";
    }
    }
    else {
    echo "0 results";
    }
    $conecta->close();
?>
