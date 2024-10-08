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
    <h1>Cadastros</h1>
    <h2>Animais Cadastrados</h2>
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
        <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM Pessoa";
        //Executa a consulta
        $result = mysqli_query($con, "$sql");
        //retorna apenas uma linha
        $row = mysqli_fetch_array($result);
    ?>
        <h2>Pessoas Cadastradas</h2>
    <table align="center" border="1" width="500">
        <tr>
            
            <th>Nome</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cep</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
        //mysql_fetch_array le uma linha por vez
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['endereco']."</td>";
            echo "<td>".$row['bairro']."</td>";
            echo "<td>".$row['cep']."</td>";
            echo "<td> <a href='AlteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td> <a href='DeletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
            }
        ?>
    </table>
    <a href="CadastroCidade.html">Realizar um novo cadastro</a>

</body>
</html>