<?php

$alunos = [
    ["nome" => "Luiza", "nota" => 6],
    ["nome" => "Alita", "nota" => 9],
    ["nome" => "Geovana", "nota" => 10]
];

$soma = 0;
$maior = 0;
$melhor = "";

foreach ($alunos as $aluno) {

    $soma = $soma + $aluno["nota"];

    if ($aluno["nota"] > $maior) {
        $maior = $aluno["nota"];
        $melhor = $aluno["nome"];
    } else {
    }
}

$media = $soma / 3;

echo "Media da turma: " . $media . "<br>";
echo "Melhor aluna: " . $melhor . "<br><br>";




$turma = [
    ["nome" => "Luiza", "nota" => 6, "idade" => 17],
    ["nome" => "Alita", "nota" => 9, "idade" => 17],
    ["nome" => "Geovana", "nota" => 10, "idade" => 18]
];

echo "Informacoes da turma:<br>";

foreach ($turma as $pessoa) {
    echo "Nome: " . $pessoa["nome"] . "<br>";
    echo "Nota: " . $pessoa["nota"] . "<br>";
    echo "Idade: " . $pessoa["idade"] . "<br>";
    echo "<br>";
}

?>