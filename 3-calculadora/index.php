<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <form action="index.php" method="get">
        <fieldset>
            <legend>Calculadora Científica</legend>

            <label for="valor1">Valor 1</label>
            <input type="text" name="valor1" id="valor1" placeholder="0" required>

            <br>

            <label for="valor2">Valor 2</label>
            <input type="text" name="valor2" id="valor2" placeholder="0" required>

            <br>

            <input type="submit" value="Calcular">

        </fieldset>
    </form>

    <?php
        if (isset($_GET['valor1'])) {
            if (empty($_GET['valor1'])) {
                echo '<br> Valor 1 Obrigatório'; }
    }else {
        exit();
    }

    if (isset($_GET['valor2'])) {
        if (empty($_GET['valor2'])) {
            echo '<br> Valor 2 Obrigatório'; }
    }else {
        exit();
    }

    echo $_GET['valor1'] + $_GET['valor2'];
    ?>

</body>
</html>