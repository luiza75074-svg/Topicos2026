<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id=$id";
$resultado = mysqli_query($conexao,$sql);

if(mysqli_num_rows($resultado) != 1){
    echo "Contato não encontrado!";
    exit;
}

$contato = mysqli_fetch_assoc($resultado);

// Processa atualização
if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $fone = $_POST['fone'];

    $sql2 = "UPDATE contatos SET nome='$nome', endereco='$endereco', telefone='$fone' WHERE id=$id";

    if(mysqli_query($conexao,$sql2)){
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Atualizado</title>
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
            padding:8px 12px;
            border-radius:6px;
            text-decoration:none;
            display:inline-block;
            margin-top:15px;
        }
        a:hover{
            background:#6d28d9;
        }
        h2{
            margin-top:50px;
        }
        </style>
        </head>
        <body>
            <h2>Contato atualizado com sucesso!</h2>
            <a href="index.php">Voltar</a>
        </body>
        </html>
        <?php
        exit;
    } else {
        echo "Erro ao atualizar: ".mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Contato</title>
<style>
body{
    background:#f3e8ff;
    color:#f712aa;
    text-align:center;
    font-family:Arial;
}
form{
    background:#ede9fe;
    padding:20px;
    margin:50px auto;
    width:300px;
    border-radius:12px;
}
input[type="text"]{
    margin:5px;
    padding:8px;
    width:90%;
    border-radius:6px;
    border:1px solid #f712aa;
}
input[type="submit"]{
    background:#f712aa;
    color:white;
    border:none;
    padding:10px;
    border-radius:6px;
    cursor:pointer;
    margin-top:10px;
}
input[type="submit"]:hover{
    background:#f712aa;
}
</style>
</head>
<body>

<h1>Editar Contato</h1>

<form method="POST">
Nome:<br>
<input type="text" name="nome" value="<?php echo $contato['nome']; ?>"><br>
Endereço:<br>
<input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"><br>
Telefone:<br>
<input type="text" name="fone" value="<?php echo $contato['telefone']; ?>"><br>
<input type="submit" name="atualizar" value="Atualizar">
</form>

</body>
</html>