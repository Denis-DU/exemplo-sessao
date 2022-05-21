<?php
session_start();
$esta_logado = isset($_SESSION['nome']);
if ($esta_logado == false) {
    header("Location: login.php");
}

echo "Bem-vindo(a) {$_SESSION['nome']}";
?>


<p>
    <a href="logout.php">Clique aqui para encerrar a sessão</a>
</p>