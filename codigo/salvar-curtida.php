<?php
    session_start();
    
    require_once "conexao.php";

    $idusuario = $_SESSION['idusuario'];
    $idpostagem = 
    
    $sql = "INSERT INTO ";

    mysqli_query($conexao, $sql);

    header("Location: principal.php");
?>