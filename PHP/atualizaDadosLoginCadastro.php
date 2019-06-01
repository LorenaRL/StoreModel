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
$sql = "UPDATE usuario SET nome='Julie' WHERE id_login=2019001";
if ($conecta->query($sql) === TRUE) {
echo "Registro atualizado com sucesso<br>";
} else {
echo "Erro na atualização do registro: " . $conecta->error."<br>";
}
$conecta->close();
?>