<?php
    session_start();
    include('./conexaoCbancoCriado.php');
    
    // não permitir que mostre a página de erros quando abrir pelo link direto 
    // e ainda retorne para a pagina de login novamente.
    
    if(empty($_POST['emailLogin'])|| empty($_POST['senhaLogin'])){
        header ('Location:../template/index.html');
        exit();
    }

$emailLogin = mysqli_real_escape_string($conecta, $_POST['emailLogin']);
$senhaLogin = mysqli_real_escape_string($conecta, $_POST['senhaLogin']);


// abaixo temos a linha qe verifica/compara se é a senha mesmo
$query = "select id_login, email from login where email='{$emailLogin}' and senha='{$senhaLogin}' ";


$result = mysqli_query($conecta, $query);

$row = mysqli_num_rows($result);

// se o login estiver correto o resultado é 1 se nao é 0
if($row == 1) {
	$_SESSION['emailLogin'] = $emailLogin;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../template/index.html');
	exit();
}
?>