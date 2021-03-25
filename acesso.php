<?php
include "verifica.php";
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

<body style='background-color: #ffdee9;'>
    <nav class="navbar nabar-fixed-top navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="?action=home"><img src="img/logo.png" style="width:65px;"></a>
            <!--Icone e função para abrir a navbar quando estiver no celular-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?action=cadastrar">Agendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=horarios">Horários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=pagamentos">Pagamentos</a>
                    </li>
                </ul>
                <?php
                $user = $_SESSION["usuario"];
                echo "
                    <div class='navbar-nav d-flex flex-row ml-auto'>
                      <div class='nav-item'><a class='btn btn-outline-light'>$user</a></div>
                      &nbsp &nbsp
                      <div class='nav-item dropdown'>
                          <a class='nav-link dropdown-toggle' href='#' data-toggle='dropdown'></a>                   
                          <div class='dropdown-menu navbar-dark bg-primary'>
                            <a class='dropdown-item' href='#'>Configurações</a>
                            <a class='dropdown-item bg-danger' href='sair.php'>Sair</a>
                          </div>
                      </div>
                    </div>
                ";
                ?>

            </div>
        </div>
    </nav>

    <div class="container">
        <?php
        $pag = @$_GET['action'];

        if ($pag == 'cadastrar') {
            require_once 'agendar.php';
        } elseif ($pag == 'horarios') {
            require_once 'horarios.php';
        } elseif ($pag == 'clientes') {
            require_once 'clientes.php';
        } elseif ($pag == 'pagamentos') {
            require_once 'pagamentos.php';
        } elseif ($pag == 'editar') {
            require_once 'editar.php';
        } elseif ($pag == 'perfil') {
            require_once 'perfil.php';
        } elseif ($pag == 'editarPago') {
            require_once 'editarPago.php';
        } else {
            require_once 'home.php';
        }
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bts/node_modules/jquery/dist/jquery.js"></script>
    <script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <script>
        $(function() {
            $('.dropdown-toggle').dropdown();
        });
        $(function() {
            $('[data-toggle="popover"]').popover()
        });
    </script>

</body>

</html>