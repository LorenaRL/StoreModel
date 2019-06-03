<?php
    session_start();
    include('./conexaoCbancoCriado.php');
    
    // não permitir que mostre a página de erros quando abrir pelo link direto 
    // e ainda retorne para a pagina de login novamente.
    
    if(empty($_POST['email'])|| empty($_POST['senha'])){
        header ('Location:../template/index.html');
        exit();
    }

$email = mysqli_real_escape_string($conecta, $_POST['email']);
$senha = mysqli_real_escape_string($conecta, $_POST['senha']);


// abaixo temos a linha qe verifica/compara se é a senha mesmo
$query = "select id_login, email from usuario where email='{$email}' and senha='{$senha}' ";


$result = mysqli_query($conecta, $query);

$row = mysqli_num_rows($result);

// se o login estiver correto o resultado é 1 se nao é 0
if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: pagLoginErro.php');
	exit();
}
?>