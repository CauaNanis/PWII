<?php include 'header.php'; ?>
<?php include 'usuario.php'; ?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">

                <div class="card bg-light shadow my-5">
                    <img src="https://i.redd.it/4z51kxu0mzqd1.png" class="card-img-top">
                    <div class="card-body">
                        <form action="./cadastro_usuario.php" method="post">
                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="label-control">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="label-control">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="confirmar_senha" class="label-control">Confirmar Senha</label>
                                <input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <p>Já possui conta? <a href="login.php">Clique aqui</a></p>
                            </div>

                            <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        if (!isset($_POST['nome'])) 
            exit();

        if (!isset($_POST['email'])) 
            exit();

        if (!isset($_POST['senha'])) 
            exit();

        if (!isset($_POST['confirmar_senha'])) 
            exit();
        
        $usuario = new Usuario('', '', '', '');
        $usuario->inserir($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['confirmar_senha'], 'comum');
    ?>

<?php include 'footer.php'; ?>