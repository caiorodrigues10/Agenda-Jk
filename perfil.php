<?php 

include_once 'include/conexao.php';

$id_cliente = $_GET["id"];

$sql = mysqli_query($link, "SELECT * FROM tb_cliente WHERE id_cliente = $id_cliente");

while($a = mysqli_fetch_array($sql)){
    $id_cliente = $a["id_cliente"];
    $nome_cliente = $a["nome_cliente"];
    $cidade = $a["cidade"];
    $bairro = $a["bairro"];
    $rua = $a["rua"];
    $numero_casa = $a["numero_casa"];
    $celular = $a["celular"];
    $telefone = $a["telefone"];
}

echo "
<div class='container col-6'>
    <form action='' method='POST'>
    <button type='submit'style='position:absolute; left:100%; top:-5%;' name='exxcluir' class='btn btn-outline-danger'>Excluir
        <span>&times;</span>
    </button>
    <a href='?action=clientes' style='position:absolute; right: 110%; top:-5%' title='Voltar' name='voltar' class='btn bg-primary text-dark mr-3 '>
        <img src='https://img.icons8.com/ios-glyphs/30/000000/arrow-pointing-left--v2.png'/>
    </a>
        <div class='form-row mt-5 mb-2'>
            <b>Nome Cliente </b>
            <input type='text' value='$nome_cliente' class='form-control' name='nomeCli'>
        </div>
        <div class='form-row mb-2'>
            <b>Cidade: </b>
            <input type='text' value='$cidade' class='form-control' name='cidade'>
        </div>
        <div class='form-row  mb-2'>
            <b>Bairro: </b>
            <input type='text' value='$bairro' class='form-control' name='bairro'>
        </div>
        <div class='form-row mb-2'>
            <b>Rua: </b>
            <input type='text' value='$rua' class='form-control'  name='rua'>
        </div>
        <div class='form-row mb-2'>
            <b>Número da Casa: </b>
            <input type='text' value='$numero_casa' class='form-control'  name='numcasa'>
        </div>
        <div class='form-row mb-2'>
            <b>Celular :</b>
            <input type='text' value='$celular' class='form-control' name='cel'>
        </div>
        <div class='form-row mb-2'>
            <b>Telefone :</b>
            <input type='text' value='$telefone' class='form-control' name='tel'>
        </div>
        <hr style='border-width: 2px'>
        <div class='form-row mt-2'>
        <div class='col-sm-12 mt-3 mb-5'>
            <button type='submit' name='Eddit' class='btn btn-primary'>Enviar</button>
            <button type='reset' class='btn btn-secondary ml-2'>Limpar</button>
        </div>
    </div>
        
    </form>
</div>
";


if(isset($_POST["Eddit"])){
    $nome_cliente = $_POST["nomeCli"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero_casa = $_POST["numcasa"];
    $celular = $_POST["cel"];
    $telefone = $_POST["tel"];

    $update = "UPDATE tb_cliente SET nome_cliente = '$nome_cliente', cidade = '$cidade', bairro = '$bairro', 
    rua = '$rua',numero_casa = '$numero_casa',celular = '$celular', telefone = $telefone WHERE id_cliente = $id_cliente";

    $query = mysqli_query($link, $update) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Editado com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=clientes' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=clientes' />";
    }
}

if(isset($_POST["exxcluir"])){

    $delete = "DELETE FROM tb_cliente WHERE id_cliente = $id_cliente";

    $d = mysqli_query($link, $delete) or die (mysqli_error($link));

    if($d == true){
        echo "<script>alert('Excluido com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=clientes' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=clientes' />";
    }
}
