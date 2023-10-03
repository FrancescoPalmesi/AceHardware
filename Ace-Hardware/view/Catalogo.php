<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <?php header('Content-Type: text/html; charset=UTF-8') ?>
  <link href="../assets/css/product.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../assets/logo.png">
  <title>Catálogo</title>
</head>
<body>

  <!-- Nav Bar  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="Principal.php"><img src="../assets/logo.png" width="60px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
          class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Catalogo.php" style="font-weight: 600; color:black;">Conhecer Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Cliente.php">Cadastro Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Produto.php">Cadastro Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Colaborador.php">Cadastro Colaboradores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Fornecedor.php">Cadastro Fornecedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controller/logout.php">Sair</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">|</a>
          </li>
          <li class="nav-item mt-2 text-danger">
            <form class="d-flex align-middle">
              Usuário:
              <?php session_start();
              echo $_SESSION['login_session']; ?>
              </label>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   <!-- Footer -->
   <footer class="container py-5 ">
    <div class="row">
      <div class="col-12 col-md">

        <small class="d-block mb-3 text-muted">&copy; 2017-2023</small>
      </div>
      <div class="col-6 col-md">
        <h5>Eletrônicos</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-danger" href="#">Caixas de Som</a></li>
          <li><a class="text-danger" href="#">Fones</a></li>
          <li><a class="text-danger" href="#">Samsung</a></li>
          <li><a class="text-danger" href="#">Iphone</a></li>
          <li><a class="text-danger" href="#">Telefones</a></li>
          <li><a class="text-danger" href="#">CFTV</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Hardware</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-danger" href="#">Processadores Intel</a></li>
          <li><a class="text-danger" href="#">Processadores AMD</a></li>
          <li><a class="text-danger" href="#">Gabinetes</a></li>
          <li><a class="text-danger" href="#">Coolers</a></li>
          <li><a class="text-danger" href="#">RAM</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Notebooks</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-danger" href="#">Samsung</a></li>
          <li><a class="text-danger" href="#">Azus</a></li>
          <li><a class="text-danger" href="#">Acer</a></li>
          <li><a class="text-danger" href="#">Gaming</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Sobre nós</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-danger" href="#">Equipe</a></li>
          <li><a class="text-danger" href="#">Localidades</a></li>
          <li><a class="text-danger" href="#">Privacidade</a></li>
          <li><a class="text-danger" href="#">Termos de seguraça</a></li>
        </ul>
      </div>
    </div>
  </footer>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>

</body>

</html>