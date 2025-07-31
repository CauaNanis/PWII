<?php session_start(); ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-3">

                <form action="./user.php" method="post">
                    <div class="mb-3">
                        <label for="name">Nome Completo</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <button type="submit" class="btn btn-dark">Iniciar</button>
                </form>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-3">
                <?php
                    if (isset($_POST['name'])) {
                        if (empty($_POST['name'])) {
                            echo '<div class="alert alert-danger" role="alert">O nome é obrigatório!</div>';
                        }

                        if (empty($_POST['name'])) {
                            $_SESSION['name'] = $_POST['name'];
                            header('Location: question1.php');
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>