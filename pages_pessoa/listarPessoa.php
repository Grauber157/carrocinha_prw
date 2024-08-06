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

        $sql = "SELECT pes.id pessoa_id, pes.nome pessoa_nome, pes.email pessoa_email, 
        pes.endereco pessoa_endereco, pes.bairro pessoa_bairro, cidade.nome cidade_nome,
        pes.cep pessoa_cep
        FROM pessoa pes
        LEFT JOIN cidade ON cidade.id = pes.id_cidade;";

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
            <th>Cidade</th>
            <th>CEP</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['pessoa_id']."</td>";
            echo "<td>".$row['pessoa_nome']."</td>";
            echo "<td>".$row['pessoa_email']."</td>";
            echo "<td>".$row['pessoa_endereco']."</td>";
            echo "<td>".$row['pessoa_bairro']."</td>";
            echo "<td>".$row['cidade_nome']."</td>";
            echo "<td>".$row['pessoa_cep']."</td>";
            echo "<td><a href='AlterarCliente.php?id=".$row['pessoa_id']."'>Alterar</a></td>";
            echo "<td><a href='DeletarCliente.php?id=".$row['pessoa_id']."'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
    </table>
</body>
</html>