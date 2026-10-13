<?php
require_once "conexao.php";

$idusuario = $_SESSION['idusuario'];
$idpostagem = $_POST['idpostagem'];

$sql = "delete from curtida where idusuario = $idusuario and idpostagem = $idpostagem";

mysqli_query($conexao, $sql);

header("Location: listar_postagem.php");
?>