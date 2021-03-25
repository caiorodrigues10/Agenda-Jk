<?php 
    session_start();
    include "include/conexao.php";
//vereficando se os campos do login estão vazios
if(empty($_POST["usuario"]) || empty($_POST["senha"])){
    echo "<meta http-equiv='refresh' content='0;url=index.php' />";
    $_SESSION["vazio"] = true;
    exit();
}

$usuario = mysqli_real_escape_string($link, $_POST["usuario"]);
$senha = mysqli_real_escape_string($link, $_POST["senha"]);

$query = "SELECT id_usuario, email from tb_usuario where email = '$usuario' and senha = md5('{$senha}')";

$result = mysqli_query($link, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION["usuario"] = $usuario;
    echo "<meta http-equiv='refresh' content='0;url=acesso.php' />";
    exit();
}else{
    $_SESSION["errologin"] = true;
    echo "<meta http-equiv='refresh' content='0;url=index.php' />";
    exit();
}
?>
