<?php
session_start();
if(!$_SESSION['email']) {
	header('Location: ../template/index.html');
	exit();
}

//evita que a página painel seja acessada sem login