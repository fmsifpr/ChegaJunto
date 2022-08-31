<?php
$conexao = mysqli_connect("localhost:3306","root","12345");
 
if (!$conexao) {
die("Impossível conectar: " . mysqli_connect_error($conexao));
}
 
$banco_ativo = mysqli_select_db($conexao ,"ChegaJuntoDB");
 
if (!$banco_ativo) {
die ("Impossível selecionar banco de dados : " . mysqli_error($conexao));
}

mysqli_set_charset($conexao, "utf8");
 
$sql="SELECT * FROM Usuario";
 
$result = mysqli_query($conexao,$sql);
 
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
echo json_encode($result);
 
mysqli_close($conexao);

?>