<?php 
require_once "verifica.php";
include "./include/conexao.php";

if(isset($_POST["enviarB"])){
    $data = $_POST["data"];
    $hora = $_POST["horario"];
    $servico = $_POST["servico"];
    $valor = $_POST["valor"];

    $id = $_SESSION["id_horario"];

    $update = "UPDATE tb_horario SET dia = '$data', hora = '$hora', servico = '$servico', valor = '$valor'  WHERE id_horario = $id";

    $query = mysqli_query($link, $update) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Editado com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=horarios' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=horario.php' />";
    }
}

if(isset($_POST["excluir"])){
    $aidi = $_SESSION["id_horario"];

    $delete = "DELETE FROM tb_horario WHERE id_horario = $aidi";

    $d = mysqli_query($link, $delete) or die (mysqli_error($link));

    if($d == true){
        echo "<script>alert('Excluido com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=horarios' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=acesso.php?action=editar' />";
    }
}