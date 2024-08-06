<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include('menu.php')
    ?>
</head>
<body>
    <?php
    include('includes/conexao.php');
    $sql = "SELECT id, nome, email, endereco, bairro, cep FROM pessoa LEFT JOIN Cidade on id = id-Cidade";

    $result = mysqli_query($con, $sql);
    ?>
    
</body>
</html>