<?php
    include ('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alteração de Cidade</h1>
    <?php
    echo "<p>Id: $id</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Endereço: $endereco</p>";
    echo "<p>Bairro:$bairro</p>";
    echo "<p>Cep:$cep</p>";
    $sql = "UPDATE cidade SET nome = '$nome', endereco = '$endereco', bairro = '$bairro', cep = '$cep' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados atualizados";
    else
        echo "Erro ao atualazar Dados!\n".mysqli_error($con);
    ?>
</body>
</html>