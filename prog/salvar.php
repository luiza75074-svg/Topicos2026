<?php
include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone)
VALUES ('$nome', '$endereco', '$fone')";

if(mysqli_query($conexao,$sql)){
    $msg = "Contato salvo!";
} else {
    $msg = "Erro: ".mysqli_error($conexao);
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
    background:#f3e8ff;
    color:#3b0764;
    text-align:center;
    font-family:Arial;
}
a{
    background:#7c3aed;
    color:white;
    padding:8px;
    border-radius:6px;
    text-decoration:none;
}
</style>
</head>
<body>

<h2><?php echo $msg; ?></h2>
<a href="index.php">Voltar</a>

</body>
</html>