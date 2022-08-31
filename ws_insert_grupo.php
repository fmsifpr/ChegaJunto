<?php
require ("../CJ/ws_connect.php");

$sql="INSERT INTO grupo (nome, data, horainicio, horafinal, custo, nivel, localizacao, descricao, modalidade_nome, usuario_email)
    VALUES ('".$_GET["nome"]."','".$_GET["data"]."','".$_GET["horainicio"]."','".$_GET["horafinal"]."','".$_GET["custo"]."',
			'".$_GET["nivel"]."','".$_GET["localizacao"]."','".$_GET["descricao"]."','".$_GET["modalidade_nome"]."','".$_GET["usuario_email"]."')";
echo $sql;

if (mysqli_query($_DB['connection'],$sql)) {
	echo "true";
} else {
	echo "false";
}

mysqli_close($_DB['connection']);
?>