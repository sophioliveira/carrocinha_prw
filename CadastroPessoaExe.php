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
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        echo "<h1>Dados</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Endereço: $endereco<br>";
        echo "Bairro: $bairro<br>";
        echo "CEP: $cep<br>"; 

        $sql = "INSERT INTO Pessoa (nome, email, endereco, bairro, cep)";
        $sql .= " VALUES ('".$nome."','".$email."','".$endereco."','".$bairro."','".$cep."')";
        echo $sql;
        // Executa comando no banco de dados 
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
            echo "<button ><a href='CadastroAnimal.php'> Clique aqui para continuar o cadastro</a></button>";
        }else {
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>
</body>
</html>