<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="cadastrarAnimalExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Animais</legend>
            <div>
                <label for="">Nome: </label>
                <input type="text" name="nome"><br>

                <label for="">Espécie: </label>
                <input type="text" name="especie"><br>

                <label for="">Raça: </label>
                <input type="text" name="raca"><br>

                <label for="">Data de Nascimento: </label>
                <input type="date" name="data_nascimento"><br>
                
                <label for="">Idade: </label>
                <input type="number" name="idade"><br>

                <label for="">Castrado: </label>
                <input type="checkbox" name="castrado" value="1"><br>
            </div>

            <div>
                <label for="dono">Dono: </label>
                <select name="dono">
                    <?php 
                        include('../include/conexao.php');
                        $sql = "SELECT * FROM pessoa";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<option value='".$row['id']."'>".$row['nome']."</option>";
                        }
                    ?>
                </select>
                <div>
                    <input type="submit" value="Enviar">
                </div>
                
            </div>
        </fieldset>
    </form>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
</body>
</html>