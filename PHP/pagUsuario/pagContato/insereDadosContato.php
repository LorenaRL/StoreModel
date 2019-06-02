<?php
session_start();
include_once("conexaoCbancoCriado.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$assunto =  filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
$mensagem =  filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_contato = "INSERT INTO contato (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";
$resultado_contato = mysqli_query($conecta, $result_contato);

if(mysqli_insert_id($conecta)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
 
	header("Location: ../pagCadastro.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário nÃo foi cadastrado com sucesso</p>";
        
	header("Location: pagCadastroErro");
}
?>

