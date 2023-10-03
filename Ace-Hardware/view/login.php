<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <?php header('Content-Type: text/html; charset=UTF-8') ?>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <title>Login</title>
  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container-fluid">
    <a class="navbar-brand" href="login.php">Loja</a>
    </div>
  </nav>

<div class="container mt-4 border rounded shadow-lg p-3 mb-5 bg-white rounded">
  <div class="row align-items-center justify-content-center align-middle">
    <div class="col-sm align-middle">
      <img src="../assets/logo.png" width="40%" class="">
    </div>
    <div class="col-sm">
      <form class="row d-flex align-items-bottom justify-content-center mt-4" action="../controller/Valida.php" method="POST">
        <div class="col-auto">
          <label for="#">Login-Email</label>
            <input type="email" class="form-control" name="login" placeholder="digite seu email"><br> <label for="#">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="digite sua senha"><br> <button type="submit" class="btn btn-primary mb-3">Logar</button>
          </div>
          </div><!--Fim do card-body--> 
        </form> <!--Final do form-->
    </div>
  </div>
</div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>