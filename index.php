<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--logo do site-->
  <link rel="shortcut icon" type="image/png" href="img/logo.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">

  <title>Agenda J.K</title>
</head>

<body background="img/tesoura.png" class="bg-primary">

  <form action="login.php" method="POST">
    <center>
      <div style="margin-top:15%;" class="col-md-4 col-sm-4">
        <?php
        if (isset($_SESSION["errologin"])) :
        ?>
          <center>
            <div class="toast bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="mr-auto">ERRO!</strong>
                <b>Usuário ou senha errado!</b>

              </div>
              <div class="toast-body">
                <small>Caso insista o erro, entre em com contato com o suporte.</small>
              </div>
            </div>
          </center>
        <?php
        endif;
        unset($_SESSION["errologin"]);
        ?>


        <?php
        if (isset($_SESSION["vazio"])) :
        ?>
          <center>
            <div class="toast bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="mr-auto">ERRO!</strong>
                <b>O campo está vazio!</b>

              </div>
              <div class="toast-body">
                <small>Caso insista o erro, entre em com contato com o suporte.</small>
              </div>
            </div>
          </center>
        <?php
        endif;
        unset($_SESSION["vazio"]);
        ?>
        <h2 class="my-2">Login</h2>
        <input name="usuario" type="text" class="form-control">
        <h2 class="mt-2">Senha</h2>
        <input name="senha" type="password" class="form-control">
        <button type="submit" class="btn btn-success my-4 mr-5">
          <h4>Entrar</h4>
        </button>
        <button type="reset" class="btn btn-danger my-4 ml-3">
          <h4>Limpar</h4>
        </button>
      </div>
    </center>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="bts/node_modules/jquery/dist/jquery.js"></script>
  <script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>