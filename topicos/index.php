<html>
<html lang="en">
<head>
   
    <title> agenda contatos -30</title>
</head>
<body>
    <h1> agenda - turma 30 - 2026</h1>
    <h2> cadastrar contato </h2>
    <form action="salvar.php" method="POST">
        nome : <input type="text" name=" nome"> <br><br>
        endereco: <input type="text" name="endereco"> <br><br>
        telefone: <input type="text" name="fone"><br><br>
        <input type="submit" value=" cadastrar">

    </form>
    

<?php
include ('conexao.php');
$sql = "SELECT * FROM contatos";
$resultado = mysqli_query($conexao,$sql);

if (mysqli_num_rows($resultado) > 0){
 while  ($linha = mysqli_fetch_assoc($resultado)){
echo $linha['nome']. "|" . $linha['endereco']. "|" . $linha['telefone'] ."| <a href='editar.php?id=" .$linha['id'] ."'>editar</a>| 
 <a href='excluir.php'>excluir</a>" .  "<br>";
 }
 
} else{
echo "<h3> nemhum contato registrado </h3>";

}


?>

</body>
</html>