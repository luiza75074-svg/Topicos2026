<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario == "admin" && $senha == "1234") {

    echo "Bem-vindo(a) " . $usuario . "<br>";
    echo "Seu cargo é: Administrador";

} else {

    echo "Erro! Usuario ou senha incorretos.";

}

?>