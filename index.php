<?php

session_start();

$esta_logado = isset($_SESSION['nome']);
if ($esta_logado == true) {
    header("Location: usuario.php");   
}
else {
    header("Location: login.php");
}