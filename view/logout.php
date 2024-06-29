<?php
// Inicia a sessão (se ainda não estiver iniciada)
session_start();

// Destrói todas as variáveis de sessão
$_SESSION = array();

// Destrói a sessão atual
session_destroy();

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
// Redireciona para a página de login ou outra página desejada
header('Location: LoginProprietario.php');
exit;
?>