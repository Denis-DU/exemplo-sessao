<?php

if ($_POST["login"] == "denis" && $_POST["senha"] == "123") {
    session_start();
    $_SESSION["nome"] = "Denis";
    header("Location: usuario.php");
}
else {
    echo "Usuário e/ou senha inválido(s)";
}