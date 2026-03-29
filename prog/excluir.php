<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id=$id";

if(mysqli_query($conexao,$sql)){
    $msg = "Excluído com sucesso!";
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