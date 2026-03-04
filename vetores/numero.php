<?php
$numeros = [50,60,70,80,90];

unset($numeros[2]);

foreach ($numeros as $numero){
    echo $numero . "<br>";
}
?>