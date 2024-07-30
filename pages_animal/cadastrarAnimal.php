<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="teste.php" method="post">
        <fieldset>
            <legend>Cadastro de Animais</legend>
            <div>
                <label for="">Nome: </label>
                <input type="text" name="nome"><br>

                <label for="">Espécie: </label>
                <input type="email" name="especie"><br>

                <label for="">Raça: </label>
                <input type="text" name="raca"><br>

                <label for="">Data de Nascimento: </label>
                <input type="date" name="data_nascimento"><br>
                
                <label for="">Idade: </label>
                <input type="text" name="idade"><br>

                <label for="">Castrado: </label>
                <input type="checkbox" name="castrado" value="1"><br>
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

                <div>
                    <label for="">CEP: </label>
                    <input type="text" name="cep">
                    
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
                
            </div>
        </fieldset>
    </form>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
</body>
</html>