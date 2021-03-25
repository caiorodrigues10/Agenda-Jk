<?php
require_once "verifica.php";
?>

<html>

<head>
    <title>Agenda J.K</title>
</head>

<body style="background:#C0C0C0">


    <?php
    include "./include/conexao.php";

    $sql = mysqli_query($link, "SELECT * FROM tb_horario");

    while ($a = mysqli_fetch_array($sql)) {
        $id_horario = $a["id_horario"];
        $cliente = $a["nome_cliente"];
        $dia = $a["dia"];
        $horario = $a["hora"];
        $servico = $a["servico"];
        $valor = $a["valor"];

        $data = new DateTime($dia);

        $d = new DateTime($horario);

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
                                        <span for="inputdata" class="mb-5"><h4><b>Nome da Cliente: </b><b class="text-primary h4">' . $cliente . '</b></h4></span>
                                        <br/>
                                        <span class="h5" for="inputservico">Código: </span><b>&nbsp;' . $id_horario . '</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Dia: </span><b>&nbsp;';
        echo $data->format("d/m/Y");
        echo '</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Horario: </span><b>&nbsp;';
        echo $d->format("i:s");
        echo '</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Serviço: </span><b>&nbsp;' . $servico . '</b>
                                        <br/>
                                        <span class="h5" for="inputservico">Valor: </span><b>&nbsp;' . $valor . ',00</b>
                                        <br/>
                                    </div>
                                </div>
                                <a href="?action=editar&id=' . $id_horario . '"><input type="button" class="btn btn-outline-primary" style="cursor:pointer" value="Editar Horário" /></a>                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

';
    }

    if (empty($id_horario)) {
        echo '<h1 class="display-4 mt-4 text-center">Nenhum Registro Encontrado!</h1>';
    }

?>

</body>

</html>