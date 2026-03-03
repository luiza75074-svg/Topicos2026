<?php

if(isset($_POST['idade'])){

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    echo "Nome: ".$nome."<br><br>";

    if($idade > 18){
        echo "Minha idade é: ".$idade."<br>";
        echo "Sexo: ".$sexo."<br>";
        echo "Endereço: ".$endereco;
    }else{
        echo "Menor de idade";
    }

}
?>
