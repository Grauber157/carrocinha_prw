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

        $sql = "SELECT cli.id, cli.nome nomecliente, cli.email, cli.ativo, cid.nome nomecidade, cid.estado FROM cliente cli LEFT JOIN cidade cid on cid.id = cli.id_cidade";
        $result = mysqli_query($con, $sql);
        //$row = mysqli_fetch_array($result);

    ?>
    <h1>Consulta de Pessoas</h1>
    <button><a href="cadastrarPessoa.php">Cadastrar Nova Pessoa</a></button>
    
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>ID Cidade</th>
            <th>CEP</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nomecliente']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$ativo."</td>";
            echo "<td>".$row['nomecidade']."</td>";
            echo "<td>".$row['estado']."</td>";
            echo "<td><a href='AlterarCliente.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='DeletarCliente.php?id=".$row['id']."'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
    </table>
</body>
</html>