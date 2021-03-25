<?php
session_start();

if (!$_SESSION["usuario"]) {
    echo "<script>alert('Faça login para acessar esta página')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php' />";
    exit;
}
