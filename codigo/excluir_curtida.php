<?php
require_once "conexao.php";

$id = $_GET['idusuario'];
$id = $_GET['idpostagem'];

$sql = "delete from curtida where idusuario = $idusuario and idpostagem = $idpostagem";

mysqli_query($conexao, $sql);

header("Location: listar_curtida.php");
?>