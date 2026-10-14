<?php
    session_start();

    require_once "conexao.php";

    $idusuario = $_SESSION['idusuario'];
    $idpostagem = $_POST['idpostagem'];

    $sql = "SELECT * FROM curtida WHERE idusuario = $idusuario AND idpostagem = $idpostagem";

    $resultado = mysqli_query($conexao, $sql);


    if (mysqli_num_rows($resultado) > 0) {

        // Remove a curtida se ja existir
        $sql = "DELETE FROM curtida WHERE idusuario = $idusuario AND idpostagem = $idpostagem";

    } else {

        // Adiciona a curtida
        $sql = "INSERT INTO curtida (idusuario, idpostagem) VALUES ($idusuario, $idpostagem)";
    }


    mysqli_query($conexao, $sql);
    


    header("Location: listar_postagem.php");
    exit();
?>