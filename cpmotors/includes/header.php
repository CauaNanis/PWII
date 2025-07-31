<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CP Motors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/PWII/cpmotors/css/style.css">
</head>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");
    const currentPath = window.location.pathname;

    links.forEach(link => {
      const linkPath = link.getAttribute("href");

      // Marcar como ativo se o começo do href bater com a URL atual
      if (currentPath.startsWith(linkPath)) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });
</script>

<body>

  <header class="header">
    <div class="container d-flex align-items-center justify-content-between py-3">

      <!-- LOGO -->
      <div class="logo">
        <span class="logo-bold">CP</span>
        <span class="logo-red">Motors</span>
      </div>

      <!-- MENU -->
      <nav>
        <ul class="nav gap-4">
          <li class="nav-item">
            <a class="nav-link active" href="/PWII/cpmotors/public/index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/PWII/cpmotors/public/anuncio/create-anuncio.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/PWII/cpmotors/public/anuncios.php">Anúncios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/PWII/cpmotors/public/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/PWII/cpmotors/public/anuncio/read-anuncio.php">Editar</a>
          </li>
        </ul>
      </nav>

    </div>
  </header>

</body>

</html>