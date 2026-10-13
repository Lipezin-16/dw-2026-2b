<?php
    session_start();

    require_once "conexao.php";

    $idusuario = $_SESSION['idusuario'];
    $idpostagem = $_POST['idpostagem'];

    $sql = "INSERT INTO curtida(idusuario, idpostagem) VALUES ($idusuario, $idpostagem);";

    mysqli_query($conexao, $sql);

    header("Location: principal.php");
?>