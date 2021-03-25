<?php 
require_once "verifica.php";
include "./include/conexao.php";

if(isset($_POST["enviar"])){
    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numeroCasa = $_POST["num"];
    $celular = $_POST["celular"];
    $telefone = $_POST["telefone"];

    $insert = "INSERT INTO tb_cliente VALUES (0,'$nome','$cidade','$bairro','$rua','$numeroCasa','$celular','$telefone')";

    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=clientes' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=clientes' />";
    
    }
}














?>