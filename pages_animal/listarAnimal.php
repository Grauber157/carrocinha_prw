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

        $sql = "SELECT ani.id animal_id, ani.nome animal_nome, ani.especie animal_especie, ani.raca animal_raca, 
        ani.data_nascimento animal_nascimento, ani.idade animal_idade, ani.castrado animal_castrado, pessoa.nome nome_dono
        FROM animal ani
        LEFT JOIN pessoa ON ani.id_pessoa = pessoa.id;";

        $result = mysqli_query($con, $sql);
        //$row = mysqli_fetch_array($result);

    ?>
    <h1>Consulta de Animais</h1>
    <button><a href="cadastrarAnimal.php">Cadastrar Novo Animal</a></button>
    
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Data de Nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Nome do Dono</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['animal_id']."</td>";
            echo "<td>".$row['animal_nome']."</td>";
            echo "<td>".$row['animal_especie']."</td>";
            echo "<td>".$row['animal_raca']."</td>";
            echo "<td>".$row['animal_nascimento']."</td>";
            echo "<td>".$row['animal_idade']."</td>";
            echo "<td>".$row['animal_castrado']."</td>";
            echo "<td>".$row['nome_dono']."</td>";
            echo "<td><a href='AlterarCliente.php?id=".$row['animal_id']."'>Alterar</a></td>";
            echo "<td><a href='DeletarCliente.php?id=".$row['animal_id']."'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
    </table>
</body>
</html>