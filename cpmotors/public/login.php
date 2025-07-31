<?php
include '../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = isset($_POST['email']) ? $_POST['email'] : exit();
    $senha = isset($_POST['senha']) ? $_POST['senha'] : exit();
    
    $email_adm = 'cpmotors@gmail.com';
    $senha_adm = '51epinga';
    
    if($email == $email_adm && $senha == $senha_adm){
        header('Location: index.php');
        exit();
    }
    else{
        echo '<script>alert("Email ou senha incorretos!")</script>';
    }
}
?>

<?php include '../includes/header.php'; ?>

<div class="page-login">
  <div class="login-container">
    <h2 class="login-title">Entrar no CP Motors</h2>

    <form action="login.php" method="POST" class="login-form">
      <div class="mb-3 text-start">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Insira seu endereço de e-mail..." required>
      </div>

      <div class="mb-4 text-start">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira sua senha..." required>
      </div>

      <button type="submit" class="btn-login">Entrar no CP Motors</button>
    </form>
  </div>
</div>

<?php include '../includes/footer.php'; ?>