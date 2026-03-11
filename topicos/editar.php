<?php
include('conexao.php');
$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";


$resultado=mysqli_query($conexao,$sql);

if (mysqli_num_rows($resultado) == 1 ){
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "contato nao encontrado na base ";
    exit;
}

if(isset($_POST['atualizar'])){
    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST['endereco'];
    $novo_fone = $_POST['fone'];

    $sql2 = "UPDATE contatos SET  nome = '$novo_nome' , endereco = '$novo_endereco', telefone = '$novo_fone'
 where id  = $id";

 if(mysqli_query($conexao, $sql2)){
    echo "<h2> contato atuializado com sucesso </h2>";
    echo "<a href='index.php' > voltar</a>";
    
    exit;
  
 } else{
    echo "<h2> erro ao atualizar </h2>" . mysqli_error($conexao);
    echo "<a href='index.php'>voltar</a>";
    exit;
 }

}
?>

<form method="post">

nome <input type="text" name="nome" value=" <?php echo $contato  ['nome']; ?>"><br>
endereco <input type="text" name="endereco" value="  <?php echo $contato  ['endereco']; ?>"><br>
telefone <input type="text" name="fone" value="  <?php echo $contato  ['telefone']; ?>"><br>

<input type="submit" name=" atualizar" value="atualizar">



</form>