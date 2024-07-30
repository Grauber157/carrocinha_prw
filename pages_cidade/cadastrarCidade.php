<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastrarCidadeExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Cidades</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome">
            </div>
            <div>
                <label for="nome">Estado</label>
                <select name="estado">
                    <option value="SP">SP</option>
                    <option value="RJ">RJ</option>
                    <option value="MG">MG</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </fieldset>
    </form>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
</body>
</html>