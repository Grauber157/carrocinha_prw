<?php   
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data_nascimento = $_POST['data_nascimento'];
    $idade = $_POST['idade'];
    $castrado = isset($_POST['castrado']);
    $dono = $_POST['dono'];

    include("../include/conexao.php");

    $sql = "INSERT INTO cidade(nome, estado) VALUES ('$nome', '$estado')";
        echo $sql;
        $result = mysqli_query($con, $sql);
        if($result)
        {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else
        {
            echo "<h2>Erro ao cadastrar!</h2>";
            mysqli_error($con);
        }
?>