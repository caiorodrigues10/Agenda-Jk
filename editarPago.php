<?php  

include_once 'include/conexao.php';

$idp = $_GET["id"];

$query = mysqli_query($link, "SELECT * from tb_pagamento where id_pagamento = $idp");

while($d = mysqli_fetch_array($query)){
    $id_pagamento = $d["id_pagamento"];
    $nome = $d["nome"];
    $valor = $d["valor"];
    $parcelas = $d["parcelas"];
    $pago = $d["pago"];

echo "
<div class='container col-6'> 
    <form action='' method='POST'>
    <button type='submit'style='position:absolute; left:100%; top:-5%;' name='dell' class='btn btn-outline-danger'>Excluir
        <span>&times;</span>
    </button>
    <a href='?action=pagamentos' style='position:absolute; right: 110%; top:-5%' title='Voltar' name='voltar' class='btn bg-primary text-dark mr-3 '>
        <img src='https://img.icons8.com/ios-glyphs/30/000000/arrow-pointing-left--v2.png'/>
    </a>
        <div class='form-row mt-5 mb-4'>
            <h3><b>Nome Cliente: <span  class='text-primary'>$nome</span> </b></h3>
        </div>
        <div class='form-row mb-2'>
            <b>Valor: </b>
            <input type='number' value='$valor' class='form-control' name='valor'>
        </div>
        <div class='form-row  mb-4'>
            <b>Parcelas: </b>
            <input type='text' value='$parcelas' class='form-control' name='parcelas'>
        </div>
        <div class=' btn-group-toggle' data-toggle='buttons'>
        <label class='btn btn-success'>
          <input type='radio' name='pago' value='1'> Pago
        </label>
        <label class='btn btn-danger'>
          <input type='radio' name='pago' value='0'> Em aberto
        </label>
      </div>
      <hr style='border-width: 2px'>
        <div class='form-row'>
            <div class='col-sm-12 mt-2 mb-5'>
                <button type='submit' name='evi' class='btn btn-primary'>Enviar</button>
                <button type='reset' class='btn btn-secondary ml-2'>Limpar</button>
            </div>
        </div>
        
    </form>
</div>

";
}

if(isset($_POST["evi"])){
    $va = $_POST["valor"];
    $par = $_POST["parcelas"];
    $pag = $_POST["pago"];
    
    if(!isset($pag)){
        $pag = $pago;
    }

    $up = "UPDATE tb_pagamento set valor = '$va', parcelas = '$par', pago = '$pag' where id_pagamento = $idp";

    $que = mysqli_query($link, $up) or die (mysqli_error($link));

    if($que == true){
        echo "<script>alert('Editado com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=pagamentos' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=pagamentos' />";
    }

}

if(isset($_POST["dell"])){

    $delete = "DELETE FROM tb_pagamento WHERE id_pagamento = $id_pagamento";

    $d = mysqli_query($link, $delete) or die (mysqli_error($link));

    if($d == true){
        echo "<script>alert('Excluido com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=pagamentos' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=pagamentos' />";
    }

}
