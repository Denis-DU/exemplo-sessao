<?php
session_start();
$esta_logado = isset($_SESSION['nome']);
if ($esta_logado == true) {
    header("Location: usuario.php");
}
?>

<form action="processar_login.php" method="post">
    <input type="text" name="login" >
    <input type="password" name="senha" >
    <input type="submit">
</form>