<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="cadastrarPessoaExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Pessoa</legend>
            <div>
                <label for="">Nome: </label>
                <input type="text" name="nome"><br>

                <label for="">Email: </label>
                <input type="email" name="email"><br>

                <label for="">Endereço: </label>
                <input type="text" name="endereco"><br>

                <label for="">Bairro: </label>
                <input type="text" name="bairro"><br>
                
                <label for="">CEP: </label>
                <input type="text" name="cep">
            </div>

            <div>
                <label for="cidade">Cidade: </label>
                <select name="cidade" id="cidade">
                    <?php 
                        include('../include/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Enviar">
            </div>
        </fieldset>
    </form>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
</body>
</html>