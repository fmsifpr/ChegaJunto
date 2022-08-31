<?php
require ("../CJ/ws_connect.php");

$sql="INSERT INTO usuario (nome, email, senha, telefone)
        VALUES ('".$_GET["nome"]."','".$_GET["email"]."','".$_GET["senha"]."','".$_GET["telefone"]."')";

if (mysqli_query($_DB['connection'],$sql)) {
	echo "true";
} else {
	echo "false";
}

mysqli_close($_DB['connection']);
?>