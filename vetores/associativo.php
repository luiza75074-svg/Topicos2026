<?php

$produto = [
    "nome" => "celular",
    "preco" => 2700,
    "estoque" => 21
];

foreach ($produto as $chave => $valor) {
    echo $chave . " : " . $valor . "<br>";
}

?>