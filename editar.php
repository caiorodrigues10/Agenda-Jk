<?php 
include_once 'include/conexao.php';

    $id_horario = $_GET["id"];
    
    $_SESSION["id_horario"] = $id_horario;

    $sql = "SELECT * FROM tb_horario WHERE id_horario = $id_horario  ";
    $query = mysqli_query($link, $sql);

    while($s = mysqli_fetch_array($query)){
        $nome_cliente = $s["nome_cliente"];
        $dia = $s["dia"];
        $horario = $s["hora"];
        $servico = $s["servico"];
        $valor = $s["valor"];
    }

echo "
<div class='container col-6'>
    <form action='editarHorario.php' method='POST'>
    <button type='submit'style='position:absolute; left:100%; top:-5%;' name='excluir' class='btn btn-outline-danger'>Excluir
        <span>&times;</span>
    </button>
    <a href='?action=clientes' style='position:absolute; right: 110%; top:-5%' title='Voltar' name='voltar' class='btn bg-primary text-dark mr-3 '>
        <img src='https://img.icons8.com/ios-glyphs/30/000000/arrow-pointing-left--v2.png'/>
    </a>
        <div class='form-row mt-5 mb-4'>
            <b class='h3 mt-3'>Cliente: <span class='text-primary'>$nome_cliente</span> </b>
            </div>
        <div class='form-row  mb-2'>
            <b>Dia: </b>
            <input type='date' class='form-control' id='inputservico' value='$dia' name='data' require
            placeholder='Digite o Serviço...'>
        </div>
        <div class='form-row mb-2'>
            <b>Horario: </b>
            <input type='text' class='form-control' id='inputhorario' value='$horario' name='horario' require
            placeholder='Digite o Horario...'>
        </div>
        <div class='form-row mb-2'>
            <b>Serviço: </b>
            <input type='text' class='form-control' id='inputhorario' value='$servico' name='servico' require
            placeholder='Digite o Horario...'>
        </div>
        <div class='form-row mb-2'>
            <b>Valor: </b>
            <input type='text' class='form-control' id='inputvalor' value='$valor' name='valor' require
            placeholder='Digite o Valor...'>
        </div>
        <hr style='border-width: 2px'>
        <div class='form-row mt-2'>
        <div class='col-sm-12 mt-3 mb-5'>
            <button type='submit' name='enviarB' class='btn btn-primary'>Enviar</button>
            <button type='reset' class='btn btn-secondary ml-2'>Limpar</button>
        </div>
    </div>
        
    </form>
</div>
";
