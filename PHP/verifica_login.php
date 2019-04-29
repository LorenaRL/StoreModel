<?php
session_start();
if(!$_SESSION['emailLogin']) {
	header('Location: ../template/index.html');
	exit();
}

//evita que a página painel seja acessada sem login