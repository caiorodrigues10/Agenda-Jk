<?php 

require_once "verifica.php";
include "./include/conexao.php";

if(isset($_POST["enviarA"])){
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $servico = $_POST["servico"];
    $valor = $_POST["valor"];
    $parcelas = $_POST["parcelas"];
    
    $in = "INSERT INTO tb_pagamento VALUES (0, '$nome','$valor', '$parcelas', 0)";

    $insert = "INSERT INTO tb_horario VALUES (0,'$nome','$data','$hora','$servico','$valor')";

    $query = mysqli_query($link, $insert) or die (mysqli_error($link));
    $qu = mysqli_query($link, $in) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=horarios' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=cadastrar' />";
    }
}
?>