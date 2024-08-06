<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
    <?php
        include("../include/conexao.php");

        $sql = "SELECT * FROM cidade";

        $result = mysqli_query($con, $sql);
        //$row = mysqli_fetch_array($result);

    ?>
    <h1>Consulta de Cidades</h1>
    <button><a href="cadastrarPessoa.php">Cadastrar Nova Cidade</a></button>
    
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['estado']."</td>";
            echo "<td><a href='AlterarCliente.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='DeletarCliente.php?id=".$row['id']."'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
    </table>
</body>
</html>