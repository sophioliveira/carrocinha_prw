<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $data_nascimento = $_POST['data_nascimento'];
        $castrado = $_POST['castrado'];
        echo "<h1>Dados</h1>";
        echo "Nome: $nome<br>";
        echo "Espécie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Data Nascimento: $data_nascimento<br>";
        echo "Castrado: $castrado<br>"; 

        $sql = "INSERT INTO Animal (nome, especie, raca, data_nascimento, castrado)";
        $sql .= " VALUES ('".$nome."','".$especie."','".$raca."','".$data_nascimento."','".$castrado."')";
        echo $sql;
        // Executa comando no banco de dados 
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
            echo "<button ><a href='Cadastros.php'> Ver cadastros</a></button>";
        }else {
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>
</body>
</html>