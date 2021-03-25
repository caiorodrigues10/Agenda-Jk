<html>
<head>
    <title>Agenda J.K</title>
</head>
<body>
    <?php
    include "./include/conexao.php";

    $nomeSql = mysqli_query($link, "SELECT * FROM tb_cliente");

    echo "

<div class='container col-6'>
    <form action='agendar_horario.php' method='POST'>
        <div class='form-row mt-5 mb-2'>
            <b>Clientes: </b>
            <select class='form-control' name='nome'>
            <option></option>";
    while ($_NOME = mysqli_fetch_array($nomeSql)) {
        $id_nome = $_NOME["id_cliente"];
        $nome = $_NOME["nome_cliente"];

        echo "
                <option value='$nome'>$nome</option>
            ";
    }
    echo "
        </select>
        </div>
        <div class='form-row mb-2'>
            <b>Dia: </b>
            <input type='date' class='form-control' name='data'>
        </div>
        <div class='form-row  mb-2'>
            <b>Hora: </b>
            <input type='number' class='form-control' name='hora'>
        </div>
        <div class='form-row mb-2'>
            <b>Serviço: </b>
            <input type='text' class='form-control'  name='servico'>
        </div>
        <div class='form-row mb-2'>
            <b>Valor:</b>
            <input type='number' class='form-control' name='valor'>
        </div>
        <div class='form-row mb-2'>
            <b>Parcelas:</b>
            <input type='number' class='form-control' name='parcelas'>
        </div>
        <div class='form-row mt-2'>
        <div class='col-sm-12 mt-3 mb-5'>
            <button type='submit' name='enviarA' class='btn btn-primary'>Enviar</button>
            <button type='reset' class='btn btn-secondary ml-2'>Limpar</button>
            <a tabindex='0' class='btn btn-info ml-2' role='button'
                data-toggle='popover' data-placement='right' data-trigger='focus'
                title='Ajuda'
                data-content='Preencha todos os campos para que o cadastro seja realizado. Caso não for esse o problema entre em contato conosco.'>Ajuda</a>
        </div>
    </div>
        
    </form>
</div>
";
?>
</body>
</html>