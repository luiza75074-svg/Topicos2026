<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Agenda</title>

<style>
body{
    background: #f3e8ff;
    font-family: Arial;
    color: #cc14b3;
    text-align: center;
    margin: 0;
}

h1{
    background: #e224b3;
    color: white;
    padding: 15px;
    margin: 0;
}

form{
    background: #ede9fe;
    padding: 20px;
    margin: 20px auto;
    width: 300px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

input[type="text"], input[type="tel"]{
    width: 90%;
    padding: 8px;
    margin: 6px 0;
    border-radius: 6px;
    border: 1px solid #c4b5fd;
}

input[type="submit"]{
    background: #f712aa;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 6px;
    cursor: pointer;
}

input[type="submit"]:hover{
    background: #ff2491;
}

.lista{
    background: #ede9fe;
    width: 60%;
    margin: 20px auto;
    padding: 15px;
    border-radius: 12px;
}

.item{
    margin: 10px 0;
}

a{
    text-decoration: none;
    color: white;
    background: #fc3ab1;
    padding: 5px 8px;
    border-radius: 6px;
    margin: 2px;
}

a:hover{
    background: #7c3aed;
}
</style>
</head>

<body>

<h1>Agenda - Turma 30</h1>

<h2>Cadastrar contato</h2>

<form action="salvar.php" method="POST">
Nome:<br>
<input type="text" name="nome" required><br>
Endereço:<br>
<input type="text" name="endereco" required><br>
Telefone:<br>
<input type="tel" name="fone" pattern="[0-9]{8,15}" title="Digite apenas números (8 a 15 dígitos)" required><br><br>
<input type="submit" value="Cadastrar">
</form>

<?php
include('conexao.php');

$sql = "SELECT * FROM contatos";
$resultado = mysqli_query($conexao,$sql);

echo "<div class='lista'>";

if (mysqli_num_rows($resultado) > 0){
    while ($linha = mysqli_fetch_assoc($resultado)){
        echo "<div class='item'>";
        echo $linha['nome']." | ".$linha['endereco']." | ".$linha['telefone']."<br>";
        echo "<a href='editar.php?id=".$linha['id']."'>Editar</a>";
        echo "<a href='excluir.php?id=".$linha['id']."' onclick='return confirmar()'>Excluir</a>";
        echo "</div>";
    }
} else {
    echo "Nenhum contato";
}

echo "</div>";
?>

<script>
function confirmar(){
    return confirm("Deseja excluir?");
}
</script>

</body>
</html>