<?php
    session_start();
    include('conexaoCbancoCriado.php');
    // apagar registro
$sql = "DELETE FROM usuario WHERE id_login =2019009";
if ($conecta->query($sql) === TRUE) {
echo "Registro apagado com sucesso<br>";
} else {
echo "Erro ao apagar o registro: " . $conecta->error."<br>";
}
$conecta->close();
?>