<?php
session_start();
session_destroy();
header('Location: encerraSessao.php');
exit();
?>