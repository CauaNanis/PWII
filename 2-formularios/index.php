<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <form action="index.php" method="get">
        <fieldset>
            <legend>Informações do Personagem</legend>

            <label for="nome">Nome do Personagem</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do Personagem" required>

            <br>

            <label for="poder">Poder do Personagem</label>
            <input type="text" name="poder" id="poder" placeholder="Poder do Personagem" required>

            <br>

            <input type="submit" value="Enviar">

        </fieldset>
    </form>

    <?php
        if (isset($_GET['nome'])) {
            if (empty($_GET['nome'])) {
                echo '<br> Nome Obrigatório';
            } else{
                echo $_GET['nome'];
            }
        echo $_GET['nome'];
    }

    if (isset($_GET['poder'])) {
        if (empty($_GET['poder'])) {
            echo '<br> Poder Obrigatório';
        } else{
            echo $_GET['poder'];
        }
        echo $_GET['poder'];
    }
    ?>

</body>
</html>