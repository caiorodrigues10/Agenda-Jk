<?php 
require_once "verifica.php";
?>
<html>
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
<body>    

<div class='d-flex flex-row-reverse bd-highlight mr-5'>
  <div class='p-2 bd-highlight'>
  <a class='nav-link bg-primary text-white' href='#' data-toggle='modal' data-target='#siteModal1'><b>Cadastrar Cliente</b></a>
  </div>
</div>

<?php 

include "./include/conexao.php";

$sql = mysqli_query($link, "SELECT * FROM tb_cliente");

while ($p = mysqli_fetch_array($sql)){
    $idcliente = $p["id_cliente"];
    $nome_cliente = $p["nome_cliente"];
    $cidade = $p["cidade"];
    $bairro = $p["bairro"];
    $rua = $p["rua"];
    $numero_casa = $p["numero_casa"];
    $celular = $p["celular"];
    $telefone = $p["telefone"];

if(empty($celular)){
    $celular = "Não registrado!";
}
if(empty($telefone)){
    $telefone = "Não registrado!";
}

echo '
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!--Cadastros-->
                <div class="container">
                <form name="frmCadastro" method="post" action="editarHorario.php">
                    <div class="row justify-content-center mr-auto mt-4 mb-5">
                        <div class="col-sm-12 col-md-10 col-lg-8">
                                <div class="form-row">
                                    <div class="form-group col-sm-8">
                                        <span for="inputdata" class="mb-5"><h4><b>Nome da Cliente: </b><b class="text-primary h4">'.$nome_cliente.'</b></h4></span>
                                        <br/>
                                        <span class="h5" for="inputservico">Cidade: </span><b>&nbsp;'.$cidade.'</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Bairro: </span><b>&nbsp;'.$bairro.'</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Rua: </span><b>&nbsp;'.$rua.'</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Numero da casa: </span><b>&nbsp;'.$numero_casa.'</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Celular: </span><b>&nbsp;'.$celular.'</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Telefone: </span><b>&nbsp;'.$telefone.'</b>
                                        <br/>
                                    </div>
                                </div>
                                <a href="?action=perfil&id='.$idcliente.'"><input type="button" class="btn btn-outline-primary" style="cursor:pointer" value="Editar perfil" /></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}

if(empty($idcliente)){
    echo '<h1 class="display-4 mt-4 text-center">Nenhum Registro Encontrado!</h1>';
}

?>

<!--Modal cadastrar-->
<!--Modal Cadastro-->
<div class="modal fade" id="siteModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Cadastro de Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!--Cadastros-->
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center my-5">
                                <h1 class="display-4">Cadastrar Cliente</h1>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-5">
                            <div class="col-sm-12 col-md-10 col-lg-8">
                                <form name="frmCadastro" method="post" action="cadastro.php">
                                    <div class="form-row">

                                        <div class="form-group col-sm-8">
                                            <label for="inputNome">Nome</label>
                                            <input type="text" class="form-control" id="inputNome" name="nome" require
                                                placeholder="Digite o nome...">
                                                
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label for="inputcidade">Cidade</label>
                                            <input type="text" class="form-control" id="inputcidade" name="cidade" require
                                                placeholder="Digite a Cidade...">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label for="inputbairro">Bairro</label>
                                            <input type="text" class="form-control" id="inputbairro" name="bairro" require
                                                placeholder="Digite o bairro...">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label for="inputrua">Rua</label>
                                            <input type="text" class="form-control" id="inputrua" name="rua" require
                                                placeholder="Digite a Rua...">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label for="inputnum">Número da casa</label>
                                            <input type="text" class="form-control" id="inputnum" name="num" require
                                                placeholder="Digite o Número da casa...">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label for="inputcel">Celular</label>
                                            <input type="text" class="form-control" id="inputcel" name="celular" require
                                                placeholder="Digite o Número do celular...">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label for="inputtel">Telefone</label>
                                            <input type="text" class="form-control" id="inputtel" name="telefone" require
                                                placeholder="Digite o Número do telefone...">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-12">
                                            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                                            <button type="reset" class="btn btn-secondary ml-2">Limpar</button>
                                            <a tabindex="0" class="btn btn-info ml-2" role="button"
                                                data-toggle="popover" data-placement="right" data-trigger="focus"
                                                title="Ajuda"
                                                data-content="Preencha todos os campos para que o cadastro seja realizado. Caso não for esse o problema entre em contato conosco.">Ajuda</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bts/node_modules/jquery/dist/jquery.js"></script>
    <script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>