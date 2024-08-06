<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.html">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM Animal";
        //Executa a consulta
        $result = mysqli_query($con, "$sql");
        //retorna apenas uma linha
        $row = mysqli_fetch_array($result);
    ?>
    <h1>Consulta</h1>
    <a href="CadastroAnimal.php">Cadastrar Novo Animal</a>
    <table align="center" border="1" width="500">
        <tr>
            
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Castrado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
        //mysql_fetch_array le uma linha por vez
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['especie']."</td>";
            echo "<td>".$row['raca']."</td>";
            echo "<td>".$row['castrado']."</td>";
            echo "<td> <a href='AlteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td> <a href='DeletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
            }
        ?>
    </table>
</body>
</html>